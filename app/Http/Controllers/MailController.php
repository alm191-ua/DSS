<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Newsletter;
use App\Models\MyMail;

class MailController extends Controller
{
    public function send_newsletter(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'body' => 'required',
        ]);

        $subject = $request->subject;
        $body = $request->body;
        $template = $request->template;

        if ($template == null) {
            $template = 'default';
        }

        $destinatarios = Newsletter::all();
        foreach ($destinatarios as $destinatario) {
            $name = $destinatario->email;
            $correo = new MyMail($name, $subject, $body, $template);
            Mail::to($destinatario->email)->send($correo);
        }

        return redirect()->back()->with('success', 'Newsletter sent successfully!');
    }
}