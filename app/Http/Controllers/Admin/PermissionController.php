<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{
    public function index()
    {
        $data = [
            'page_name' => 'permissions_list' ,
            'category_name' => 'none' ,
            'permissions' => Permission::all() ,
        ];
        $this->seo()->setTitle('لیست دسترسی‌ها ');
        return view('admin.pages.permissions.permission_index')->with($data);
    }

    public function create()
    {
        $data = [
            'page_name' => 'permissions_create' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('افزودن دسترسی');
        return view('admin.pages.permissions.permission_create')->with($data);
    }

    public function store(Request $request)
    {
        Permission::create($this->validateNewDataRequest($request));
        alert()->success('دسترسی با موفقیت ثبت شد');
        return redirect()->route('admin.permissions.index');
    }

    protected function validateNewDataRequest($request): array
    {
        return $request->validate([
            'name' => ['string' , 'required' , 'max:255' , 'unique:permissions'] ,/*نام دسترسی*/
            'label' => ['string' , 'nullable' , 'max:255'] ,/*کاربرد دسترسی*/
            'description' => ['string' , 'nullable' , 'max:255'] ,/*توضیحات دسترسی*/
        ]);
    }

    public function show(Permission $permission)
    {
        //
    }

    public function edit(Permission $permission)
    {
        $data = [
            'page_name' => 'permissions_edit' ,
            'category_name' => 'none' ,
            'permission' => $permission ,
        ];
        $this->seo()->setTitle('ویرایش دسترسی');
        return view('admin.pages.permissions.permission_edit')->with($data);
    }

    public function update(Request $request , Permission $permission)
    {
        $permission->update($this->validateUpdateDataRequest($request,$permission));
        alert()->success('دسترسی با موفقیت ویرایش شد');
        return redirect()->route('admin.permissions.index');
    }

    protected function validateUpdateDataRequest($request ,$permission): array
    {
        return $request->validate([
            'name' => ['string' , 'required' , 'max:255' , Rule::unique('permissions')->ignore($permission->id)] ,/*نام دسترسی*/
            'label' => ['string' , 'nullable' , 'max:255'] ,/*کاربرد دسترسی*/
            'description' => ['string' , 'nullable' , 'max:255'] ,/*توضیحات دسترسی*/
        ]);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        alert()->success('دسترسی با موفقیت حذف شد');
        return back();
    }
}
