<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('pages.home');
    }


    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
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
        return view('pages.service')->with($data);
    }
}
