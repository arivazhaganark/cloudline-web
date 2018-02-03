<?php

namespace CloudLine\Http\Controllers\Backend;

use CloudLine\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ruser()
    {
        return view('admin.customer.ruser');
    }

    public function index()
    {
        return view('admin.customer.index');
    }
}
