<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use SEOMeta;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('About');
        SEOMeta::setDescription('About JMC Limited');
        SEOMeta::setCanonical('http://127.0.0.1:8000/about');
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }
}