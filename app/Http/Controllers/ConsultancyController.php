<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultancy;
use SEOMeta;

class ConsultancyController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Consultancy Approaches');
        SEOMeta::setDescription('JMC Limited consultancy approach');
        SEOMeta::setCanonical('http://127.0.0.1:8000/consultancy-approach');
        $approach = Consultancy::all();
        return view('consultancy.index', compact('approach'));
    }
}