<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'body' => 'required|string|max:5000',
        ]);

        // メール送信
        Mail::to('5jdie167enkdi4@gmail.com')->send(new ContactMail($request->body));

        return redirect()->back()->with('success', 'お問い合わせ内容を送信しました。ありがとうございます。');
    }
}
