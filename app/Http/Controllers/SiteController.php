<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        $data = [
            'title' => 'Service pages',
            'services' => [
                'Web Design',
                'SEO',
                'Programing',
                'Maketing Online',
            ],
        ];
        return view('service')->with($data);
    }
}
