<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function about()
    {
    	$name = 'Reynald';
    	$last = 'Schianova';
    	return view('about', compact('name','last'));
    }

    public function contact()
    {
    	return view ('welcome');
    }
}
