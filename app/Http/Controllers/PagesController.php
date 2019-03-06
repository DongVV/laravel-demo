<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'go to store',
            'go to market',
            'go to work'
    
        ];
        // return view('welcome', ['tasks' => $tasks]);
        return view('welcome', compact('tasks'));
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
