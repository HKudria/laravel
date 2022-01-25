<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    public function store(Request $request) {
       $contact = Contact::findOrFail($request->id);
       Mail::to(env('MAIL_WHO_GET_MAIL'))->send(new SendMessage($contact));
       return redirect()->route('home')->with('success','Widomość wyslana pomyslnie. Wkrótce skontaktuję się z tobą');
    }
}
