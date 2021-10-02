<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Cafe $cafe)
    {
//        return $cafe->products()->get();
//return Cafe::query()->whereId('1')->get();
        $data = [
            'page_name' => 'restaurant' ,
            'category_name' => 'none' ,
            'cafe' => $cafe ,
            'products' => $cafe->products()->get(),
        ];
        $this->seo()->setTitle('رستوران'.' '.$cafe->name);
        return view('home.pages.restaurant')->with($data);
    }
}
