<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function allSubCategory()
    {
        return view('admin.allSubCategory');
    }
    public function addSubCategory()
    {
        return view('admin.addSubCategory');
    }
}
