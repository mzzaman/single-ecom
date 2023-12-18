<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function allProduct()
    {
        return view('admin.allProduct');
    }

    public function addProduct()
    {
        return view('admin.addProduct');
    }
}
