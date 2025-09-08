<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Dhafi Rathan Rabani',
            'umur' => 20,
            'hobi' => ['Coding', 'Gaming', 'Reading']
        ];
        
        return view('home', $data);
    }
}
