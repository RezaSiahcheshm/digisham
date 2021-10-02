<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Token;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class LoginController extends Controller
{
    use login ;

    public function showLoginForm()
    {
        $data = [
            'page_name' => 'login' ,
        ];
        $this->seo()->setTitle('ورود');
        return view('auth.login-mobile')->with($data);
    }

    public function login(Request $request)
    {
        $this->validatePhoneNumberRequest($request);
        if($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        $this->incrementLoginAttempts($request);
        $request->session()->flash('mobile' , $request->mobile);
        if($user = $this->findUser($request->mobile)) {
            $this->createCodeAndSendSMS($request->mobile , $user);
            return redirect(route('token'));
        }
        $data = [
            'page_name' => 'register' ,
        ];
        $this->seo()->setTitle('ثبت نام');
        return view('auth.register')->with($data);
    }

    public function register(Request $request)
    {
        if(!$this->hasMobileSession($request)) {
            return $this->sendSessionNotFoundResponse();
        }
        if(!$this->findUser(session()->get('mobile'))) {
            $validDate = $this->validateRegisterDataRequest($request);
            $user = $this->createUser($validDate);
            $request->session()->reflash('mobile');
            event(new Registered($user));
            if($response = $this->registered($request , $user)) {
                return $response;
            }
            $this->createCodeAndSendSMS(session()->get('mobile') , $user);
            return redirect(route('token'));
        }
        return $this->sendLoginFailedResponse();
    }

    public function showTokenForm(Request $request)
    {
        $data = [
            'page_name' => 'token' ,
            'page_title' => 'کد فعال سازی' ,
        ];
        $this->seo()->setTitle('کد فعال سازی');
        if(!$this->hasMobileSession($request)) {
            return $this->sendSessionNotFoundResponse();
        }
        $request->session()->reflash('mobile');
        return view('auth.token')->with($data);
    }

    public function token(Request $request)
    {
        if(!$this->hasMobileSession($request)) {
            return $this->sendSessionNotFoundResponse();
        }
        if($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        $request->session()->reflash('mobile');
        $this->validateCodeRequest($request);
        $user = $this->findUser(session()->get('mobile'));
        if(Token::GetVerifyCodeMobile($request->code , $user) && !!$user) {
            Token::DestroyUsedCode(session()->get('mobile'));
            Auth::guard()->login($user , true);
            session()->regenerate();

            $this->clearLoginAttempts($request);
            if($response = $this->authenticated($request , Auth::guard()->user())) {
                return $response;
            }
            alert()->success('شما وارد شدید')->autoclose(3000);
            return $request->wantsJson()
                ? new JsonResponse([] , 204)
                : redirect()->intended('/home');
        }
        $this->incrementLoginAttempts($request);
        return $this->sendWrongCodeResponse($request);
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([] , 204)
            : redirect('/');
    }
}
