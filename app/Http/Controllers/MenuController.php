<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = [
            'page_name' => 'restaurant' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('رستوران');
        return view('home.pages.restaurant')->with($data);
    }
}
