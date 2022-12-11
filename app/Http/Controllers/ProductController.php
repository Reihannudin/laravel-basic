<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product' , ['name' => 'BTS JAPANESE ALBUM' , 'price' => 160000]);
    }
}
