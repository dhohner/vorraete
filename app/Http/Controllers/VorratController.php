<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class VorratController extends Controller
{
    public function index() : View
    {
        return view('vorraete', []);
    }
}
