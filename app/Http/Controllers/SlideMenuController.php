<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideMenuController extends Controller
{
    public function index()
    {
        $data = [
            'page_name' => 'slideMenu' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('پروفایل');
        return view('home.pages.slideMenu')->with($data);
    }
}
