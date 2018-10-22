<?php
namespace Repository;
use Contract\Repository\Message as MessageInterface;
use App\Mail\MessageSend;
use Mail;

class Message implements MessageInterface
{
	protected $siteowner;

	public function __construct()
	{
		$this->siteowner = 'webstar1027@gmail.com';
	}

	public function send($data)
	{		
        $this->sendOwner($data);
        $this->sendUser($data);
        return 1;
	}

	public function sendOwner($data)
	{
		$emailsender = new MessageSend($data);
        Mail::to($this->siteowner)->send($emailsender);
	}

	public function sendUser($data)
	{
		$emailsender = new MessageSend($data);
        Mail::to($data['email'])->send($emailsender);
	}
}