<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{

    public function index()
    {
        $data = [
            'page_name' => 'roles_list' ,
            'category_name' => 'none' ,
            'roles' => Role::all() ,
        ];
        $this->seo()->setTitle('لیست نقش‌ها ');
        return view('admin.pages.roles.role_index')->with($data);
    }

    public function create()
    {
        $data = [
            'page_name' => 'roles_create' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('افزودن نقش');
        return view('admin.pages.roles.role_create')->with($data);
    }

    public function store(Request $request)
    {
        $data=$this->validateNewDataRequest($request);
        $role = Role::create($data);
        $role->permissions()->sync($data['permissions']);
        alert()->success('نقش با موفقیت ثبت شد');
        return redirect()->route('admin.roles.index');
    }

    protected function validateNewDataRequest($request): array
    {
        return $request->validate([
            'name' => ['string' , 'required' , 'max:255' , 'unique:roles'] ,/*نام نقش*/
            'label' => ['string' , 'nullable' , 'max:255'] ,/*کاربرد نقش*/
            'description' => ['string' , 'nullable' , 'max:255'] ,/*توضیحات نقش*/
            'permissions' => ['array' , 'required'] ,/*دسترسی‌ها*/
        ]);
    }

    public function show(Role $role)
    {
        //
    }

    public function edit(Role $role)
    {
        $data = [
            'page_name' => 'roles_edit' ,
            'category_name' => 'none' ,
            'role' => $role ,
        ];
        $this->seo()->setTitle('ویرایش نقش');
        return view('admin.pages.roles.role_edit')->with($data);
    }

    public function update(Request $request , Role $role)
    {
        $data=$this->validateUpdateDataRequest($request , $role);
        $role->update($data);
        $role->permissions()->sync($data['permissions']);
        alert()->success('نقش با موفقیت ویرایش شد');

        return redirect()->route('admin.roles.index');
    }

    protected function validateUpdateDataRequest($request , $role): array
    {
        return $request->validate([
            'name' => ['string' , 'required' , 'max:255' , Rule::unique('roles')->ignore($role->id)] ,/*نام نقش*/
            'label' => ['string' , 'nullable' , 'max:255'] ,/*کاربرد نقش*/
            'description' => ['string' , 'nullable' , 'max:255'] ,/*توضیحات نقش*/
            'permissions' => ['array' , 'required'] ,/*دسترسی‌ها*/
        ]);
    }

    public function destroy(Role $role)
    {
        $role->delete();
        alert()->success('نقش با موفقیت حذف شد');
        return back();
    }
}
