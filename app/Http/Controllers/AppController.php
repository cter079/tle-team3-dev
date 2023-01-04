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
        ])->orWhere([['account_id', "=", 5], ['chat_id', '=', $id]])->orWhere([['account_id', "=", 10], ['chat_id', '=', $id]])->orWhere([['account_id', "=", 20], ['chat_id', '=', $id]])->get();
        return view('chat', ['chatContaints' => $chats], ['chats' => $chatName]);
    }
   

    public function sendMessage(Request $request)
    {
        $body = json_decode($request->getContent(), true);
        $message = $body["msg"];
        $chat_id = $body["id"];
        $name = $body["name"];
        $account_id = Auth::id();



        $data = Query::select("*")
            ->where([
                [
                    'query',
                    '=',
                 $message
                ], ['chat_id', $chat_id]
            ])->get();

        
           
if(isset($data[2]["response"])){
        $replay =[ $data[0]['response'],$data[1]["response"],$data[2]["response"]];
}
elseif(isset($data[1]["response"])){
        $replay =[ $data[0]['response'],$data[1]["response"]];
}
else{
    $replay = [$data[0]['response']];
}
        $id = $data[0]["id"];
        if ($replay == "Oké ik zie je straks") {
            $oldSaldo = User::select('saldo')->where('id', $account_id)->first();
            $newSaldo = $oldSaldo['saldo'] - 20;
            User::where('id', $account_id)->update(['saldo' => $newSaldo]);
            $notification = new Notifications();

            $notification->message = "Er is geld afgeschreven van uw bank voor: chaps voor voetbal";
            $notification->account_id = $account_id;
            $notification->save();
        }
if($message == "Oke k kom zo"){

    $notification = new Notifications();
            $notification->message = "Je hebt een nieuwe mattie in je contactenlijst";
            $notification->account_id = $account_id;
            $notification->save();
            $notification = Notifications::select('message')->where('account_id', Auth::id())->latest()->first();
            $data2 = Query::select("*")->where([['query', '=',$message], ['chat_id', 2]])->get();
//check if data2 is not null
if(isset($data2[0]["response"])){
    
$chatid = 2;
$name2 ='Keynai';
$replay2 =$data2[0]['response'];

$this->storeMessage2($chatid, $account_id, $data2, $name2, $replay2);
}


}
        
        // else{
        //     $notification = new Notifications();

        //     $notification->message = "Goed geantwoord! Dit is hoe jongeren met elkaar communiceren";
        //     $notification->account_id = $account_id;
        //     $notification->save();
        //     $notification = Notifications::select('message')->where('account_id', Auth::id())->latest()->first();

        // }
        
    


        $this->storeMessage($message, $chat_id, $account_id, $data, $name, $replay);

        $queries = Responses::select("response")
            ->where('query_id', $id)->get();
            if(isset($notification)){
        return json_encode(["replay" => $replay, "queries" => $queries, "notification" => $notification['message']]);
            }
            else {
                return json_encode(["replay" => $replay, "queries" => $queries]);
            }
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
//for loop for each response and save it in the database
for ($i = 0; $i < count($data); $i++) {

        $chatReceived = new Messages();

        $chatReceived->name = $name;
        $chatReceived->account_id = $account_id;
        $chatReceived->chat_id = $chat_id;
        $chatReceived->direction = "received";
        $chatReceived->messages = $data[$i]["response"];
        $chatReceived->save();
}
       
    }
    public function storeMessage2($chatid, $account_id, $data2, $name2, $replay2)
    {
       
for ($i = 0; $i < count($data2); $i++) {

        $chatReceived = new Messages();

        $chatReceived->name = $name2;
        $chatReceived->account_id = $account_id;
        $chatReceived->chat_id = $chatid;
        $chatReceived->direction = "received";
        $chatReceived->messages = $data2[$i]["response"];
        $chatReceived->save();
}
       
    }

    public function reset()
    {
        $account_id = Auth::id();
        $deleteMessages = Messages::where('account_id', $account_id)->delete();
        $deleteNotifications = Notifications::where('account_id', $account_id)->delete();
        $money = 2234;
        User::where('id', $account_id)->update(['saldo' => $money]);


        return view('home');
    }

    public function settings(){
        $account_id = Auth::id();

        return view('settings');
    }
    public function deleteAccount(){
        $account_id = Auth::id();
        $account = User::where('id', $account_id)->delete();

        return view('login');
    }
}
