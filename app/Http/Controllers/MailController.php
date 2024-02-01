<?php

namespace App\Http\Controllers;

use App\Mail\MailGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $data = $request->all();
        if($data['name']==null|| $data['email']==null|| $data['password']==null || $data['text']==null){
            return redirect()->back()->with('error', 'Compila tutti i campi');
        }else{

            Mail::to('Electronicmagazine@gmail.com')->send(new MailGenerator($data['name'], $data['email'], $data['text']));
            return redirect()->back()->with('message', 'Mail inviata con successo');
        }
        
        
    }
}
