<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use Log;

class MailController extends Controller
{
    public function Maildata(Request $request)
    {
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
            ];

            Mail::send('email', ['data' => $data], function ($message) use ($data, $request) {
                $message->to('comnex638@gmail.com');
                $message->subject($data['subject']);
                $message->from($request->email, $request->name);

                // Attach file if uploaded
                if ($request->hasFile('file')) {
                    $file = $request->file('file');
                    $message->attach($file->getRealPath(), [
                        'as' => $file->getClientOriginalName(),
                        'mime' => $file->getMimeType(),
                    ]);
                }
            });

            return back()->with('success', 'Terima kasih telah menghubungi kami!');
        } catch (Exception $e) {
            Log::error('Gagal mengirim email: ' . $e->getMessage());
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }
}
