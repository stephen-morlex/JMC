<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Associate;
use SEOMeta;

class AssociateController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Associates');
        SEOMeta::setDescription('JMC Limited Associates');
        SEOMeta::setCanonical('http://127.0.0.1:8000/associates');
        $associates = Associate::all();
        return view('associates.index', compact('associates'));
    }
}