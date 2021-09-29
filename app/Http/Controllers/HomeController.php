<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'page_name' => 'home' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('خانه');
        return view('home.home')->with($data);
    }
}
