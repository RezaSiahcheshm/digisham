<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cafe;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('لیست محصولات ');
        return view('admin.pages.products.product_index' , [
            'products' => Product::all() ,
        ])->with($this->list);
    }

    public function create()
    {
        $this->seo()->setTitle('افزودن محصول');
        return view('admin.pages.products.product_create' , [
            'cafes' => Cafe::all() ,
        ])->with($this->create);
    }

    public function store(Request $request)
    {
        $valid = $this->validateNewDataRequest($request);
        /*روش یک*/
//        $valid['user_id']=$user->id;
//        $valid['cafe_id']=$user->cafe_id;
//        $user->products()->create($valid);
        /*روش دو*/
        $cafe = Cafe::find($valid['cafe_id']);
        $cafe->products()->create([
            'user_id' => auth()->user()->id ,
            'cafe_id' => $cafe->id ,
            'title' => $valid['title'] ,
            'price' => $valid['price'] ,
            'description' => $valid['description'] ,
            'image' => $valid['image'] ?? null ,
//            'inventory' => $valid['inventory'] ,
        ]);
        alert()->success('محصول با موفقیت ثبت شد');
        return redirect()->route('admin.products.create');
    }

    public function show(Product $product)
    {
//
    }

    public function edit(Product $product)
    {
        $this->seo()->setTitle('ویرایش محصول');
        return view('admin.pages.products.product_edit' , compact('product'))->with($this->edit);

    }

    public function update(Product $product , Request $request)
    {
        $product->update($this->validateUpdateDataRequest($request , $product));
        alert()->success('محصول با موفقیت ویرایش شد');
        return redirect()->route('admin.products.index');

    }

    public function destroy(Product $product)
    {
        $product->delete();
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
            'title' => ['string' , 'max:255'] ,/*نام غذا*/
            'cafe_id' => ['numeric'] ,/*رستوران*/
            'price' => ['numeric'] ,/*قیمت غذا*/
            'description' => ['string' , 'nullable' , 'max:255'] ,/*توضیحات غذا*/
            'image' => ['string' , 'nullable'] ,/*عکس غذا*/
//            'inventory' => ['numeric' , 'nullable'] ,/*تعداد موجودی*/
        ]);

    }

    protected function validateUpdateDataRequest($request): array
    {
        return $request->validate([
            'title' => ['string' , 'max:255'] ,/*نام غذا*/
            'price' => ['numeric'] ,/*قیمت غذا*/
            'description' => ['string' , 'nullable' , 'max:255'] ,/*توضیحات غذا*/
            'image' => ['string' , 'nullable'] ,/*عکس غذا*/
//            'inventory' => ['numeric' , 'nullable'] ,/*تعداد موجودی*/
        ]);
    }

}
