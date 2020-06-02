<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Hore";
        // ['name' => $name] , sama aja kaya compact
        return view('home', compact('name')); //compact('isi nama = harus sama dgn variable') 
    }
}
