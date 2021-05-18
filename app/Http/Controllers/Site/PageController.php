<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;



class PageController extends Controller
{

    public function contactStore(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        return redirect()->route('contact.success');

    }

    public function contactSuccess()
    {
        return view('site.pages.contact-success');

    }

    public function contact()
    {
        return view('site.pages.contact');
    }

    public function faq()
    {
        return view('site.pages.faq');
    }
}
