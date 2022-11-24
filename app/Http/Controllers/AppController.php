<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\App;
use App\Models\Messages;

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
        $chat = Messages::where([
            ['account-id', '=', Auth::id()],
            ['chat-id', '=', $id]
          ])->get();
        return view('chat', ['chatContaints' => $chat]);
    }
}