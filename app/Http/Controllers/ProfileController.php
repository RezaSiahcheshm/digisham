<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function index()
    {
        $data = [
            'page_name' => 'profile_index' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('پروفایل');
        return view('home.pages.profile.profile_index')->with($data);
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        $data = [
            'page_name' => 'profile_edit' ,
            'category_name' => 'none' ,
            'user' => auth()->user() ,
        ];
        $this->seo()->setTitle('ویرایش اطلاعات کاربری');
        return view('home.pages.profile.profile_edit')->with($data);
    }

    public function update(Request $request)
    {
        auth()->user()->update($this->validateUpdateDataRequest($request));
        alert()->success('اطلاعات شما با موفقیت ویرایش شد');
        return redirect()->route('profile.index');
    }


    protected function validateUpdateDataRequest($request): array
    {
        $user= auth()->user();
        return $request->validate([
            'name' => ['string' , 'nullable' , 'max:255' , Rule::requiredIf(!empty($user->name))] ,/*نام*/
            'lastname' => ['string' , 'nullable' ,'max:255' , Rule::requiredIf(!empty($user->lastname))] ,/*نام خانوادگی*/
            'email' => ['email' , 'nullable' ,Rule::requiredIf(!empty($user->email)) , Rule::unique('users')->ignore($user->id)] ,/*آدرس ایمیل*/
            'gender' => ['required'] ,/*جنسیت*/
            //            'birthday' => ['string' , 'nullable' , 'max:255'] ,/*تاریخ تولد*/
            //            'username' => ['string' , 'nullable' , 'max:255' , Rule::unique('users')->ignore($user->id)] ,/*نام کاربری*/
        ]);
    }
}
