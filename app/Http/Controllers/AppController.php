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
        $chatsReceived = Messages::where([
            ['account_id', '=', Auth::id()],
            ['chat_id', '=', $id], ['direction', '=', 'received']
        ])->get();
        return view('chat', ['chatContaints' => $chatsReceived], ['chats' => $chatName]);
    }

    public function sendMessage(Request $request)
    {
        $body = json_decode($request->getContent(), true);
        $message = $body["msg"];

        // return response()->json(['success' => $body['msg']]);

        $data = Query::select("response")
            ->where(
                'query',
                'LIKE',
                '%' . $message . '%'
            )->get();


        $replay = $data;
        return json_encode($replay);
        $this->storeMessage($message);
    }

    public function storeMessage($message){

    }
}
