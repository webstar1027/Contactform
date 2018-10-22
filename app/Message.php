<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public static function createMessage($data)
    {
    	$message = new Message;
    	$message->name = $data['name'];
    	$message->email = $data['email'];
    	$message->subject = $data['subject'];
    	$message->message = $data['messagebody'];
    	$message->save();

    }
}
