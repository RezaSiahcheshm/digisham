<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = [
            'page_name' => 'comment' ,
            'category_name' => 'none' ,
        ];
        $this->seo()->setTitle('نظرات');
        return view('home.pages.comment')->with($data);
    }
}
