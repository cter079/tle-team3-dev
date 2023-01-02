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





class bankoeController extends Controller
{
    public function saldoView()
    {
        $account_id = Auth::id();

        $saldo = User::select("saldo")
            ->where('id', Auth::id())->first();
        $bankSaldo = User::select("bank")
            ->where('id', Auth::id())->first();

        // dd($saldo["saldo"]);

        if ($saldo["saldo"] <= 0) {
            $notification = new Notifications();
            $notification->message = "U heeft geen geld meer, u kan daardoor rood gaan staan. Let op! Geld lenen kost geld.";
            $notification->account_id = $account_id;
            $notification->save();
        }
        return view('bankoe', ['saldo' => $saldo],['bank' => $bankSaldo]);
    }
    public function deposit()
    {
        $account_id = Auth::id();
       $error = '';
        $saldo = User::select("saldo")
            ->where('id', Auth::id())->first();
        $bankSaldo = User::select("bank")
            ->where('id', Auth::id())->first();


        return view('deposit', ['saldo' => $saldo],['bank' => $bankSaldo],['error' => $error]);
    }
    public function depositMoney(Request $request)
    {
        $account_id = Auth::id();
        $error = '';

        $saldo = User::select("saldo")
            ->where('id', Auth::id())->first();
        $bankSaldo = User::select("bank")
            ->where('id', Auth::id())->first();


        $depositMoney = $request["amount"];
        $newSaldo = $saldo['saldo'] - $depositMoney;
        if($newSaldo <= 0 ){
            $error = ["U kunt niet meer geld storten dan u heeft."];
            return view('deposit', ['saldo' => $saldo],['bank' => $bankSaldo],['error' => $error]);
            
        } else{
            User::where('id', $account_id)->update(['saldo' => $newSaldo]);

            $newBank = $bankSaldo['bank'] + $depositMoney;
            User::where('id', $account_id)->update(['bank' => $newBank]);
            return view('deposit', ['saldo' => $saldo],['bank' => $bankSaldo],['error' => $error]);
        }
    }
    public function withdraw()
    {
        $account_id = Auth::id();
        $error = '';

        $saldo = User::select("saldo")
            ->where('id', Auth::id())->first();
        $bankSaldo = User::select("bank")
            ->where('id', Auth::id())->first();

            return view('withdraw', ['saldo' => $saldo],['bank' => $bankSaldo],['error' => $error]);
        }
        public function withdrawMoney(Request $request)
    {
        $account_id = Auth::id();
        $error = '';

        $saldo = User::select("saldo")
            ->where('id', Auth::id())->first();
        $bankSaldo = User::select("bank")
            ->where('id', Auth::id())->first();


        $withdrawMoney = $request["amount"];
        $newSaldo = $saldo['saldo'] + $withdrawMoney;
        $newBank = $bankSaldo['bank'] - $withdrawMoney;
        if($newBank < 0 ){
            $error = ["U kunt niet meer geld storten dan u heeft."];
            return view('deposit', ['saldo' => $saldo],['bank' => $bankSaldo],['error' => $error]);
            
        } else{
            User::where('id', $account_id)->update(['saldo' => $newSaldo]);

            User::where('id', $account_id)->update(['bank' => $newBank]);
            return view('withdraw', ['saldo' => $saldo],['bank' => $bankSaldo],['error' => $error]);
        }
    }

    function picca(){
        return view('picca');
    }
    }


    
