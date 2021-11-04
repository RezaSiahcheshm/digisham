<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(Cafe $cafe)
    {
        $data = [
            'page_name' => 'information' ,
            'category_name' => 'none' ,
            'cafe' => $cafe ,
        ];
        $this->seo()->setTitle('اطلاعات');
        return view('home.pages.information')->with($data);
    }
}
