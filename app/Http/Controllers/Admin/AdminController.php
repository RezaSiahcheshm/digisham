<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $admin = [
        'page_name' => 'sales' ,
        'category_name' => 'dashboard' ,
        'has_scrollspy' => 0 ,
        'scrollspy_offset' => '' ,
        'alt_menu' => 0 ,
    ];

    public function __invoke()
    {
        $this->seo()->setTitle('پنل مدیریت');
        return view('admin.admin')->with($this->admin);
    }
}
