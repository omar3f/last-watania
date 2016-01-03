<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function contact() {


        $links = (new \App\Link)->links();
        $data = (new \App\MainData)->data(['logo', 'favicon' , 'websitename', 'mail', 'address', 'phone', 'short-desc', 'short-desc-title', 'short-desc-photo', 'footer-photo']);

        $social = (new \App\Social)->social(['facebook', 'twitter', 'linkedin', 'youtube', 'google', 'skype']);


        return view('site.contact.contact', compact('links', 'social', 'data'));
    }

    public function email(Requests\ContactRequest $request) {
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
