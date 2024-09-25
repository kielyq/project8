<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
{
    return view('home');
}
    public function showArray(){
        $array = [
            ['id' => 1, 'title' => 'кровать1', 'price' => 255, 'path' => 'img/1234.jpg'],
            ['id' => 2, 'title' => 'постель', 'price' => 55, 'path' => 'img/12345.jpg'],
            ['id' => 3, 'title' => 'bed', 'price' => 234, 'path' => 'img/1234.jpg'],
            ['id' => 4, 'title' => 'кровать2', 'price' => 626, 'path' => 'img/12345.jpg'],
            ['id' => 5, 'title' => 'постель', 'price' => 666, 'path' => 'img/1234.jpg'],
            ['id' => 6, 'title' => 'bed2', 'price' => 444, 'path' => 'img/12345.jpg']
            ];

            
            return view('array', compact('array'));

            
    }
    
}
