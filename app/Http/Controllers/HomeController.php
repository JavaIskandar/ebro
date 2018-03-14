<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function createMenu()
    {
        return view ('user.createmenu');
    }
}
