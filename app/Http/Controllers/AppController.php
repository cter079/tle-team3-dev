<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\App;
use App\Models\Messages;
use App\Models\Query;


use Illuminate\Support\Facades\Auth;
use \Illuminate\Validation\Validator;
use App\Models\User;





class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show()
    {
        $chats =  App::all();
        return view('gappie', ['chats' => $chats]);
    }
    public function chatView($id)
    {
        $chatName = App::where('id', $id)->get();
        $chats = Messages::where([
            ['account_id', '=', Auth::id()],
            ['chat_id', '=', $id],
        ])->get();
        return view('chat', ['chatContaints' => $chats], ['chats' => $chatName]);
    }

    public function sendMessage(Request $request)
    {
        $body = json_decode($request->getContent(), true);
        $message = $body["msg"];
        $chat_id = $body["id"];
        $name = $body["name"];
        $account_id = Auth::id();



        $data = Query::select("response")
            ->where(
                'query',
                'LIKE',
                '%' . $message . '%'
            )->get();


        $replay = $data;
        $this->storeMessage($message, $chat_id, $account_id, $data, $name);
        return json_encode($replay);
        
    }

    public function storeMessage($message, $chat_id, $account_id, $data, $name){
        $chatSent = new Messages();

        $chatSent->name = $name;
        $chatSent ->account_id =$account_id;
        $chatSent->chat_id = $chat_id;
        $chatSent->direction = "sent";
        $chatSent->messages = $message;
        $chatSent->save();


        $chatReceived = new Messages();

        $chatReceived->name = $name;
        $chatReceived ->account_id =$account_id;
        $chatReceived->chat_id = $chat_id;
        $chatReceived->direction = "received";
        $chatReceived->messages = $data[0]["response"];
        $chatReceived->save();
    }
}
