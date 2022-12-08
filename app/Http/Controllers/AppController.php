<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\App;
use App\Models\Messages;
use App\Models\Query;
use App\Models\Notifications;
use App\Models\Responses;





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


    public function showChats()
    {
        $chats =  App::all();
        $notifications =  Notifications::where('account_id', Auth::id())->get();

        return view('gappie', ['chats' => $chats], ['notifications' => $notifications]);
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
    public function saldoView()
    {
        $account_id = Auth::id();

        $saldo = User::select("saldo")
            ->where('id', Auth::id())->first();
            
            // dd($saldo["saldo"]);
       
        if($saldo["saldo"] <= 0){
            $notification = new Notifications();
            $notification->message = "U heeft geen geld meer, u kan daardoor rood gaan staan. Let op! Geld lenen kost geld.";
            $notification->account_id = $account_id;
            $notification->save();
        }
        return view('bankoe', ['saldo' => $saldo]);

    }

    public function sendMessage(Request $request)
    {
        $body = json_decode($request->getContent(), true);
        $message = $body["msg"];
        $chat_id = $body["id"];
        $name = $body["name"];
        $account_id = Auth::id();



        $data = Query::select("*")
            ->where([[
                'query',
                'LIKE',
                '%' . $message . '%'],['chat_id', $chat_id]
            ])->get();


        $replay = $data[0]["response"];
        $id = $data[0]["id"];
        $this->storeMessage($message, $chat_id, $account_id, $data, $name, $replay);

        $queries = Responses::select("response")
            ->where('query_id', $id)->get();
        return json_encode(["replay" => $replay, "queries" => $queries]);
    }

    public function storeMessage($message, $chat_id, $account_id, $data, $name, $replay)
    {
        $chatSent = new Messages();

        $chatSent->name = $name;
        $chatSent->account_id = $account_id;
        $chatSent->chat_id = $chat_id;
        $chatSent->direction = "sent";
        $chatSent->messages = $message;
        $chatSent->save();


        $chatReceived = new Messages();

        $chatReceived->name = $name;
        $chatReceived->account_id = $account_id;
        $chatReceived->chat_id = $chat_id;
        $chatReceived->direction = "received";
        $chatReceived->messages = $data[0]["response"];
        $chatReceived->save();
        if ($replay == "Oké ik zie je straks") {
            $notification = new Notifications();

            $notification->message = "Pasop! Je bent te aardig. Dit zet je zwak neer in jouw buurt waardoor je sneller overvallen kan worden.";
            $notification->account_id = $account_id;
            $notification->save();
        }
    }
}
