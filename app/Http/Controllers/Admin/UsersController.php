<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:create-user')->only(['create' , 'store']);
        $this->middleware('can:delete-user')->only(['destroy']);
    }

    public function index()
    {
        $data = [
            'category_name' => 'users' ,
            'page_name' => 'user_list' ,
        ];
        $loggedUser = collect([auth()->user()]);
        $admin = collect([]);
        $companyManager = collect([]);
        $cafeManager = collect([]);
        $cafeManagerOwn = collect([]);
//        $cafeManagerOwn = User::where('cafe_id' , auth()->user()->cafe_id)->get();
        $customer = collect([]);
        if(Gate::allows('show-users-company-admin')) $admin = User::where('is_admin' , ['1'])->get();
        if(Gate::allows('show-users-company-staff')) $companyManager = User::where('is_staff' , ['1'])->get();
        if(Gate::allows('show-users-cafe-manager')) $cafeManager = User::where('is_manager' , ['1'])->get();
        if(Gate::allows('show-users-cafe-manager-own')) $cafeManagerOwn = User::where('cafe_id' , auth()->user()->cafe_id)->get();
        if(Gate::allows('show-users-customer')) $customer = User::where('is_admin' , ['0'])->where('is_staff' , ['0'])->where('is_manager' , ['0'])->get();
        $users = $loggedUser->merge($admin)->merge($companyManager)->merge($cafeManager)->merge($customer)->merge($cafeManagerOwn)->unique('id');

        $this->seo()->setTitle('لیست کاربران ');
        return view('admin.pages.users.user_index' , [
            'users' => $users
        ])->with($data);
    }

    public function create()
    {
        $data = [
            'category_name' => 'users' ,
            'page_name' => 'user_create' ,
        ];
        $this->seo()->setTitle('افزودن کاربر');
        return view('admin.pages.users.user_create')->with($data);
    }

    public function store(Request $request)
    {
        $data = $this->validateNewDataRequest($request);
        $user = User::create($data);
        if(Gate::allows('permissions-users')) {
            $user->permissions()->sync($request->permissions);
            $user->roles()->sync($request->roles);
        }
        alert()->success('کاربر با موفقیت ثبت شد');
        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        if(Gate::allows('edit-user') || auth()->user()->id == $user->id) {
            $data = [
                'category_name' => 'users' ,
                'page_name' => 'user_create' ,
                'user' => $user ,
            ];
            $this->seo()->setTitle('ویرایش کاربر');
            return view('admin.pages.users.user_edit')->with($data);
        } else {
            return abort(403 , 'THIS ACTION IS UNAUTHORIZED.');
        }
    }

    public function update(User $user , Request $request)
    {
        if(Gate::allows('edit-user') || auth()->user()->id == $user->id) {
            $data = $this->validateUpdateDataRequest($request , $user);
            $user->update($data);
            if(Gate::allows('permissions-users')) {
                $user->permissions()->sync($request->permissions);
                $user->roles()->sync($request->roles);
            }
            alert()->success('کاربر با موفقیت ویرایش شد');
            return redirect()->route('admin.users.index');
        } else {
            return abort(403 , 'THIS ACTION IS UNAUTHORIZED.');
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
        alert()->success('کاربر با موفقیت حذف شد');
        return back();
    }

    protected function validateNewDataRequest($request): array
    {
        return $request->validate([
            'name' => ['string' , 'nullable' , 'max:255'] ,/*نام*/
            'lastname' => ['string' , 'nullable' , 'max:255'] ,/*نام خانوادگی*/
            'username' => ['string' , 'nullable' , 'max:255' , 'unique:users'] ,/*نام کاربری*/
            'email' => ['email' , 'nullable' , 'unique:users'] ,/*آدرس ایمیل*/
            'mobile' => ['numeric' , 'nullable' , 'digits:11' , 'unique:users' , 'regex:/(09)[0-9]{9}/'] ,/*شماره موبایل*/
            'identifyNumber' => ['numeric' , 'nullable' , 'digits:10' , 'unique:users' , 'regex:/^(?!(\d)\1{9})\d{10}$/'] ,/*کد ملی*/
            'birthday' => ['string' , 'nullable' , 'max:255'] ,/*تاریخ تولد*/
            'gender' => ['required'] ,/*جنسیت*/
        ]);
    }

    protected function validateUpdateDataRequest($request , $user): array
    {
        return $request->validate([
            'name' => ['string' , 'nullable' , 'max:255'] ,/*نام*/
            'lastname' => ['string' , 'nullable' , 'max:255'] ,/*نام خانوادگی*/
            'username' => ['string' , 'nullable' , 'max:255' , Rule::unique('users')->ignore($user->id)] ,/*نام کاربری*/
            'email' => ['email' , 'nullable' , Rule::unique('users')->ignore($user->id)] ,/*آدرس ایمیل*/
            'mobile' => ['numeric' , 'nullable' , 'digits:11' , 'regex:/(09)[0-9]{9}/' , Rule::unique('users')->ignore($user->id)] ,/*شماره موبایل*/
            'identifyNumber' => ['numeric' , 'nullable' , 'digits:10' , 'regex:/^(?!(\d)\1{9})\d{10}$/' , Rule::unique('users')->ignore($user->id)] ,/*کد ملی*/
            'birthday' => ['string' , 'nullable' , 'max:255'] ,/*تاریخ تولد*/
            'gender' => ['required'] ,/*جنسیت*/
        ]);
    }

}