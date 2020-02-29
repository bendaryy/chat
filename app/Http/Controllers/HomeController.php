<?php

namespace App\Http\Controllers;

use App\Http\Resources\userResource;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return userResource::collection(User::all());
        return view('home');
    }
    public function getFriends()
    {
        return userResource::collection(User::where('id','!=' , auth()->id())->get());
    }
}
