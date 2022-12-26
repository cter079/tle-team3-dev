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





class TutorialController extends Controller
{

    public function tutorial()
    {
        return view('tutorial');
    }
}