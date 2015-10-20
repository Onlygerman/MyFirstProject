<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function getHello()
    {
        return view('hello')->with('name', 'Thomas');
    }
}
