<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //


public function about(){
$name = 'dangmckeown';
return view('pages.about', compact('name'));
}

public function contact(){
$details = array('daniel.mckeown@gmail.com','mckeown_daniel@hotmail.com','facebook.com/daniel.mckeown.5','twitter.com/dangmckeown');
return view('pages.contact', compact('details'));
}

}
