<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('لیست کاربران ');
        return view('admin.pages.users.user_index' , [
            'users' => User::paginate(5) ,
        ])->with($this->list);
    }

    public function create()
    {
        $this->seo()->setTitle('افزودن کاربر');
        return view('admin.pages.users.user_create')->with($this->create);
    }

    public function store(Request $request)
    {
        User::query()->create($this->validateNewDataRequest($request));
        alert()->success('کاربر با موفقیت ثبت شد');
        return redirect()->route('admin.users.index');
    }

    public function show(User $user , $id)
    {
        return view('admin.pages.users.user_edit' , compact('user'))->with($this->edit);
    }

    public function edit(User $user)
    {
        $this->seo()->setTitle('ویرایش کاربر');
        return view('admin.pages.users.user_edit' , compact('user'))->with($this->edit);
    }

    public function update(User $user , Request $request)
    {
        $user->update($this->validateUpdateDataRequest($request,$user));
        alert()->success('کاربر با موفقیت ویرایش شد');
        return redirect()->route('admin.users.index');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

    private $list = [
        'category_name' => 'users' ,
        'page_name' => 'user_list' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,

    ];
    private $create = [
        'category_name' => 'users' ,
        'page_name' => 'user_create' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,
    ];
    private $edit = [
        'category_name' => 'users' ,
        'page_name' => 'user_edit' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,

    ];
    private $account_settings = [
        'category_name' => 'users' ,
        'page_name' => 'account_settings' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,
    ];
    private $profile = [
        'category_name' => 'users' ,
        'page_name' => 'profile' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,

    ];

    protected function validateNewDataRequest($request): array
    {
        return $request->validate([
            'name' => ['string' , 'nullable' , 'max:255'] ,/*نام*/
            'lastname' => ['string' , 'nullable' , 'max:255'] ,/*نام خانوادگی*/
            'accessLevel' => ['required'] ,/*سمت*/
            'username' => ['string' , 'nullable' , 'max:255' , 'unique:users' ] ,/*نام کاربری*/
            'email' => ['email' , 'nullable' , 'unique:users'] ,/*آدرس ایمیل*/
            'mobile' => ['numeric' , 'nullable' , 'digits:11' , 'unique:users' , 'regex:/(09)[0-9]{9}/'] ,/*شماره موبایل*/
            'identifyNumber' => ['numeric' , 'nullable' , 'digits:10' , 'unique:users' , 'regex:/^(?!(\d)\1{9})\d{10}$/'] ,/*کد ملی*/
            'birthday' => ['string' , 'nullable' , 'max:255'] ,/*تاریخ تولد*/
            'gender' => ['required'] ,/*جنسیت*/
        ]);
    }
    protected function validateUpdateDataRequest($request ,$user): array
    {
        return $request->validate([
            'name' => ['string' , 'nullable' , 'max:255'] ,/*نام*/
            'lastname' => ['string' , 'nullable' , 'max:255'] ,/*نام خانوادگی*/
            'accessLevel' => ['required'] ,/*سمت*/
            'username' => ['string' , 'nullable' , 'max:255' ,  Rule::unique('users')->ignore($user->id) ] ,/*نام کاربری*/
            'email' => ['email' , 'nullable' , Rule::unique('users')->ignore($user->id)] ,/*آدرس ایمیل*/
            'mobile' => ['numeric' , 'nullable' , 'digits:11' , 'regex:/(09)[0-9]{9}/' ,Rule::unique('users')->ignore($user->id)] ,/*شماره موبایل*/
            'identifyNumber' => ['numeric' , 'nullable' , 'digits:10' , 'regex:/^(?!(\d)\1{9})\d{10}$/' ,Rule::unique('users')->ignore($user->id)] ,/*کد ملی*/
            'birthday' => ['string' , 'nullable' , 'max:255'] ,/*تاریخ تولد*/
            'gender' => ['required'] ,/*جنسیت*/
        ]);
    }

}
