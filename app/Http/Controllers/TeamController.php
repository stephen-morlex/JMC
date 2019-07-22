<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use SEOMeta;

class TeamController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('JMC Teams');
        SEOMeta::setDescription('JMC Limited Teams Page');
        SEOMeta::setCanonical('http://127.0.0.1:8000/teams');
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }
}