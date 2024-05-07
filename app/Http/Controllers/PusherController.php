<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index()
    {
        return view(view: 'index');
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->input('message')))->toOthers();
        return view('broadcast', ['message' => $request->input('message')]);
    }

    public function receive(Request $request)
    {
        return view(view: 'receive');
    }
}
