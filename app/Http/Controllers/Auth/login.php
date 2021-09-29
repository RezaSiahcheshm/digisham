<?php


namespace App\Http\Controllers\Auth;


use App\Models\Token;
use App\Models\User;
use App\Notifications\Channels\sendGhasedakSMS;
use App\Notifications\TokenNotification;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

trait login
{
    use sendGhasedakSMS , ThrottlesLogins;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function hasMobileSession(Request $request): bool
    {
        return $request->session()->has('mobile');
    }

    protected function findUser($mobile)
    {
        return User::query()->whereMobile($mobile)->first();
    }

    protected function validatePhoneNumberRequest(Request $request): void
    {
        $request->validate([
            'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric' ,
        ]);
    }

    protected function validateRegisterDataRequest(Request $request): array
    {
        return $request->validate([
            'name' => ['required' , 'string' , 'max:255'] ,
            'lastname' => ['required' , 'string' , 'max:255'] ,
            'email' => ['string' , 'email' , 'max:255' , 'unique:users' , 'nullable'] ,
            'gender' => ['required'] ,
        ]);
    }

    protected function validateCodeRequest(Request $request): void
    {
        $request->validate([
            'code' => ['required' , 'numeric' , 'digits:6']
        ]);
    }

    protected function createUser($validDate)
    {
        return User::create([
            'mobile' => session()->get('mobile') ,
            'name' => $validDate['name'] ,
            'lastname' => $validDate['lastname'] ,
            'email' => $validDate['email'] ,
            'gender' => $validDate['gender'] ,
        ]);
    }

    protected function username()
    {
        return 'mobile';
    }

    protected function sendSessionNotFoundResponse()
    {
        alert()->error(trans('auth.sessionNotFound') , 'عملیات ناموفق شد');
        throw ValidationException::withMessages([
            'login' => [trans('auth.sessionNotFound')] ,
        ]);
    }

    protected function sendLoginFailedResponse()
    {
        alert()->error(trans('auth.loginFailed') , 'عملیات ناموفق شد');
        throw ValidationException::withMessages([
            'login' => [trans('auth.loginFailed')] ,
        ]);
    }

    protected function sendWrongCodeResponse()
    {
        throw ValidationException::withMessages([
            'code' => [trans('auth.code')] ,
        ]);
    }

    protected function authenticated(Request $request , $user)
    {
        //
    }

    protected function registered(Request $request , $user)
    {
        //
    }

    protected function loggedOut(Request $request)
    {
        alert()->success('شما خارج شدید')->autoclose(3000);
    }

    protected function createCodeAndSendSMS($mobile , $user): void
    {
        $code = Token::generateCode($mobile , $user);
        $user->notify(new TokenNotification($code , $mobile));
    }
}