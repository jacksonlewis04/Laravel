<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 
            'phone' => 'required', 
            'email' => 'required|email', 
            'subject' => 'required', 
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name, 
            'phone' => $request->phone, 
            'email' => $request->email, 
            'subject' => $request->subject, 
            'message' => $request->message
        ];

        /*
        $data = array(
                'name' => $request->name, 
                'phone' => $request->phone, 
                'email' => $request->email, 
                'subject' => $request->subject, 
                'message' => $request->message
            );
        */

        Mail::to('kompakmitraberjaya@gmail.com')->send(new ContactMail($data));

        return redirect('contact')->with('message', 'Pesan Anda telah dikirim!'); // Terima kasih sudah menghubungi kami!
    }
}
