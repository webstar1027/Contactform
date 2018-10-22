<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repository\Message as MessageRepository;
use Toast;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $message;

    public function __construct(MessageRepository $message)
    {
        $this->middleware('auth');
        $this->message = $message;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
  
    public function messageSend(Request $request) 
    {
        $input = $request->all();

        $name = $input['name'];
        $email = $input['email'];
        $subject = $input['subject'];
        $message = $input['message'];
        
        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'messagebody' => $message
        );

       \App\Message::createMessage($data);
        $this->message->send($data);     
        Toast::message('Message is sent successfully', 'success', 'Message Send Success')  ;
        return redirect('/home');

    }

    public function displayMessage()
    {
        return view('pages.messagedisplay');
    }

    public function getMessage(Request $request)
    {
        $messages = \App\Message::get();

        return DataTables::of($messages)
                         ->setRowId('id')
                         ->make(true);

    }

}
