<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
