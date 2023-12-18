<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function pendingOrder()
    {
        return view('admin.pendingOrder');
    }

    public function cencleOrder()
    {
        return view('admin.cencleOrder');
    }

    public function completeOrder()
    {
        return view('admin.completeOrder');
    }
}
