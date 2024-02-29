<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $to = $request->input('to');
        $subject = $request->input('subject');
        $message = $request->input('message');
        
        try {
            Mail::to($to)->send(new SendMail($subject, $message));
            return response()->json(['message' => 'Email sent successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error sending email', 'error' => $e->getMessage()], 500);
        }
    }
}
