<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactPost(Request $request)
    {
        $this->validate($request, [
        		'username' => 'required',
        		'email' => 'required|email',
        		'comment' => 'required'
        	]);

        ContactUS::create($request->all());

        return back()->with('success', 'Ευχαριστούμε που επικοινωνήσατε μαζί μας!');
    }
}
