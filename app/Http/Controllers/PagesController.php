<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravel';
        return view('index', compact('title'));
        // return view('index')->with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('about', compact('title'));
        // return view('about');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
         return view('services')->with($data);
        // return view('services', compact($data));
        // return view('services');
    }
}
