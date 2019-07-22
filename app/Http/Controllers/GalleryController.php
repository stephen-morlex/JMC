<?php

namespace App\Http\Controllers;

use App\Gallery;
use SEOMeta;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('Gallery');
        SEOMeta::setDescription('JMC Limited image gallery');
        SEOMeta::setCanonical('http://127.0.0.1:8000/gallery');
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }
}