<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('dendengbakar1@gmail.com')->send(new TestMail([
            'title' => 'Hi Admin',
            'body' => 'Di accept dong!',
        ]));
    }
}
