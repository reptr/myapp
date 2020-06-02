<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $name = "Hore";
        return view('home', compact('name'));
    }

    // jika ada method lain tdk akan terbaca, hanya membantu method __invoke
}
