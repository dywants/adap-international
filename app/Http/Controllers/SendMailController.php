<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendContactEmail(Request $request): string
    {
        $content = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:5'
        ]);

        Mail::to($content['email'])->send(new ContactEmail($content));

        return redirect()->back()->with('success', 'Email has been sent.');
    }
}
