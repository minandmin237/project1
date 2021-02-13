<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function abount()
    {
        return view('abount');
    }
    public function contact()
    {
        return view('contact');
    }
    public function hello($name)
    {
        $data = [
            'name' => $name,
            'age' => 18
        ];
        return view('hello', $data);
}
}
