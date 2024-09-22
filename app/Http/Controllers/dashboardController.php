<?php

namespace App\Http\Controllers;

use OpenAI\Client;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class dashboardController extends Controller
{
    public function standard(){

        return view('standard');
    }

    public function grade(){

        return view('grade');
    }

    public function subject(){

        return view('subject');
    }

    public function learningOutCome()
    {
        return view('learningOutCome');
    }

    public function addQuestion()
    {
        return view('addQuestion');
    }

    public function addQuestionCreate(Request $request){


        $prompt = "Create a mcq question on the CCSS For Mathematics  on the following topic :
                    C. Analyze and solve linear equations and pairs of simultaneous linear equations.
                    that question are easy wtih  4 option with making the response are json";



        // Call GPT API
//        $yourApiKey = getenv('GPT_API_KEY');
//        $client = OpenAI::client($yourApiKey);
//        $result = $client->chat()->create([
//            'model' => 'gpt-4',
//            'messages' => [
//                ['role' => 'user', 'content' => 'Hello!'],
//            ],
//        ]);

        
        $client = \OpenAI::client(getenv('GPT_API_KEY'));
        $result = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
            ],
        ]);

        dd($result);

    }



}
