<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackController extends Controller
{
    public function send(Request $request)
    {
        $message = $request->input('message');

        if (!empty($message)) {
            $settings = [
                'username' => 'Slack Bot Exam',
                'link_names' => true
            ];
    
            $client = new \Maknz\Slack\Client(env('SLACK_HOOK_URL', ''), $settings);
    
            $client->send($message);

            return back();
        }

        return view('index');
    }
}
