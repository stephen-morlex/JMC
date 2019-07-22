<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use SEOMeta;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('Contact Us');
        SEOMeta::setDescription('JMC Limited Contact page');
        SEOMeta::setCanonical('http://127.0.0.1:8000/contact');
        return view('contact.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Contact::create($request->all());
        \Mail::send(
            'contact.mail',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message'),
                'subject' => $request->get('subject')
            ),
            function ($message) {
                $message->from('stephenvicson@gmail.com');
                $message->to('stephenvicson@gmail.com', 'Admin')->subject('Contact information from your website');
            }
        );
        \Session::flash('success', 'thanks for contacting us, we will return to you within the 24 hours of the work');
        return redirect()->back();
    }
}