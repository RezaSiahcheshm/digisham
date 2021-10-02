<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use Illuminate\Http\Request;


class CafeController extends Controller
{
    private $list = [
        'category_name' => 'cafe' ,
        'page_name' => 'cafe_list' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,

    ];
    private $create = [
        'category_name' => 'cafe' ,
        'page_name' => 'cafe_create' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,
    ];
    private $edit = [
        'category_name' => 'cafe' ,
        'page_name' => 'cafe_edit' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,

    ];

    public function index()
    {
        $this->seo()->setTitle('لیست رستوران ');
        return view('admin.pages.cafes.cafe_index' , [
            'cafes' => Cafe::all() ,
        ])->with($this->list);
    }

    public function create()
    {
        $this->seo()->setTitle('افزودن رستوران جدید');
        return view('admin.pages.cafes.cafe_create')->with($this->create);
    }

    public function store(Request $request)
    {
        Cafe::query()->create($this->validateDataRequest($request));
        return redirect()->route('admin.cafe.index');
    }

    public function show(Cafe $cafe)
    {
        //
    }

    public function edit(Cafe $cafe)
    {
        $this->seo()->setTitle('ویرایش رستوران');
        return view('admin.pages.cafes.cafe_edit' , compact('cafe'))->with($this->edit);
    }

    public function update(Request $request , Cafe $cafe)
    {
        $cafe->update($this->validateDataRequest($request));
        return redirect()->route('admin.cafe.index');

    }

    public function destroy(Cafe $cafe)
    {
        $cafe->delete();
        return back();
    }

    protected function validateDataRequest(Request $request): array
    {
        return $request->validate([
            'name' => ['string' , 'nullable' , 'max:255'] ,/*نام رستوران*/
            'code' => ['string' , 'nullable' , 'max:255'] ,/*کد اختصاصی رستوران*/
            'status' => ['string' , 'nullable' , 'max:255'] ,/*وضعیت کار رستوران*/
            'type' => ['string' , 'nullable' , 'max:255'] ,/*نوع رستوران*/
            'priceLvl' => ['string' , 'nullable' , 'max:255'] ,/*سطح قیمت غذا رستوران*/
            'facilities' => ['string' , 'nullable' , 'max:255'] ,/*امکانات رستوران*/
            'owner' => ['string' , 'nullable' , 'max:255'] ,/*مالک رستوران*/
            'manager' => ['string' , 'nullable' , 'max:255'] ,/*مدیر رستوران*/
            'employee' => ['string' , 'nullable' , 'max:255'] ,/*کارمند رستوران*/
            'address' => ['string' , 'nullable' , 'max:255'] ,/*آدرس رستوران*/
            'location' => ['string' , 'nullable' , 'max:255'] ,/*موقعیت جغرافیای رستوران*/
            'zipCode' => ['numeric' , 'nullable' , 'digits:10'] ,/*کد پستی رستوران*/
            'tel' => ['numeric' , 'nullable' , 'digits:11' , 'regex:/^0\d{2,3}\d{8}$/'] ,/*شماره تماس رستوران*/
            'instagram' => ['string' , 'nullable' , 'max:255'] ,/*ایدی اینستاگرام رستوران*/
            'time' => [] ,/*ساعت کاری رستوران*/
            'photos' => [] ,/*عکس رستوران*/
        ]);
    }
}