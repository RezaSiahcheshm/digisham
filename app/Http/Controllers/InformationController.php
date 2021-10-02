<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $data = [
            'page_name' => 'information' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('اطلاعات');
        return view('home.pages.information')->with($data);
    }
}
