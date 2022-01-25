<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\PostRequest;
use App\Models\Contact;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'price', 'contact', 'sendMessage');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function price()
    {
        return view('price');
    }

    public function contact()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendMessage(ContactRequest $request)
    {
        $contect = new Contact();
        $contect->author_ip  = $request->ip;
        $contect->name = $request->name;
        $contect->email = $request->email;
        if(!empty($contect->phone)){
            $contect->phone = $request->phone;
        }
        $contect->text = $request->text;

        $contect->save();
        $id = $contect->contact_id;
        return redirect()->route('home.sendMail',['id'=>$id]);
    }
}
