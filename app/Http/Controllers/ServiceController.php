<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use SEOMeta;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('JMC Services');
        SEOMeta::setDescription('JMC Limited Services Page');
        SEOMeta::setCanonical('http://127.0.0.1:8000/services');
        $services = Service::all();
        return view('services.index', compact('services'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        SEOMeta::setTitle($service->title);
        SEOMeta::setDescription($service->content);
        return view('services.show', compact('service'));
    }
}