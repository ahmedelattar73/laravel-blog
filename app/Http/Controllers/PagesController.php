<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex ()
    {
        return view('pages.welcome');
    }

    public function getAbout ()
    {
        $data = [
            'name'  => 'ahmed',
            'email' => 'ahmed@yahoo.com'
        ];
        return view('pages.about')->with('data', $data);
    }

    public function getContact ()
    {
        return view('pages.contact');
    }

}