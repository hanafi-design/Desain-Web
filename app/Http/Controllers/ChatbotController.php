<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $response = $client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Kamu adalah asisten chatbot untuk website portofolio Laravel. Jawab dengan singkat, jelas, dan ramah.'
                ],
                [
                    'role' => 'user',
                    'content' => $request->message
                ]
            ]
        ]);

        return response()->json([
            'reply' => $response->choices[0]->message->content
        ]);
    }
}