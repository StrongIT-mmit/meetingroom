<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    //
    public function basic_email(){
        echo "helo";die();
    	$mail=Mail::send('mail', array(
    		'name' => 'aye chan oo',
    		'email' => 'chanlaymaymay23@gmail.com',
    		'user_message' => "go to the palace",
    		'email_content'=>html_entity_decode("<b>you are hired at our company!</b>")
    	),function($message)
    	{
    		$message->from(env('MAIL_USERNAME'))
    				->to('chanlaymaymay23@gmail.com')
    				->subject('[Other]we received your message');
    	});

        if($mail){
            echo "sent Successfully";
        }

    	// echo "<script>alert('Basic email is sent!')</script>";
     //    return redirect()->route('adhome')->with('status','Mail Successfully Sent!');
	 }
}
