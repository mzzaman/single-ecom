<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function allCategory()
    {
        return view('admin.allCategory');
    }

    public function addCategory()
    {
        return view('admin.addCategory');
    }
}
