<?php

namespace Bright\Contactform\Http\Controllers;

use Bright\Contactform\Mail\Brightadimmail;
use Bright\Contactform\Models\Contact;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends BaseController
{
    //
    public function contactpage(){

        return view("contactform::contact");

    }

    public function brightsendmail(Request $req){
        $validate=$req->validate([
            "email"=> "required|email",
            "name"=>"required",
            'subject'=>'required',
            'message'=>'required'
        ]);
        $data=[
            'email'=> $req->email,
            'name'=> $req->name,
            'subject'=> $req->subject,
            'message'=> base64_encode($req->message),
        ];


        Contact::create($validate);
        $admin_email=\config('bright_config.admin_email');
        if ($admin_email===null || $admin_email===''){
            return redirect()->back()->with('erro','Email not setup');
        }else{
            Mail::to($admin_email)->send(new Brightadimmail($data));
        }

        return redirect()->back()->with('success','Message sent');


}
}
