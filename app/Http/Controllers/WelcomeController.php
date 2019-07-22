<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Service;
use SEOMeta;

class WelcomeController extends Controller
{

    public function index()
    {
        SEOMeta::setTitle('JMC-Homepage');
        SEOMeta::setDescription('is a firm driven by the desire to provide a cutting edge solution to educational and socio-economic needs of individuals, groups, communities through public and private institutions.');
        return view('welcome', compact('teams', 'services'));
    }
}