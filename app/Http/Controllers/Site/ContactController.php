<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function contact() {
        return view('site.contact.contact');
    }

    public function email(Request $request) {
        $subject            = $request->subject;
        $name               = $request->name;
        $email_to           = $request->email;
        $customer_message   = $request->message;
        $email_from         = (new \App\MainData)->where('key', 'email')->first()->value;

        Mail::send('emails.contact-mail', compact('subject', 'name', 'email_from', 'customer_message'), function ($m) use ($subject, $email_to) {
            $m->subject($subject);
            $m->from('noreply@customer.com');
            $m->to($email_to);
        });
        return redirect()->action('Site\ContactController@contact');
    }
}
