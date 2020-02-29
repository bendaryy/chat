<?php

namespace App\Http\Controllers;

use App\Http\Resources\sessionResource;
use App\Models\Session;
use Illuminate\Http\Request;

class Sessioncontroller extends Controller
{
    public function create(Request $request){
        $session = Session::create(['user1_id'=>auth()->id(),'user2_id'=>$request->friend_id]);
        return new sessionResource($session);
    }
}
