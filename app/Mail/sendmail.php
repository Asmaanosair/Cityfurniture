<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $email=$request->email;
        return $this->Subject("City furniture(Contact_Us)")->view('mail1',['msg'=>$request->msg,'Subject'=>$request->Subject,'name'=>$request->name,
            'email'=>$request->email])->to("sales@cityforfurniture.com")->from("$email");

    }
}
