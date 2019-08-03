<?php

namespace App\Http\Controllers;

use App\Click;
use App\Key;
use App\Move;
use App\User;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function keys(Request $request)
    {
        $keys = Key::create($request->all());

        return response()->json($keys, 201);
    }

    public function moves(Request $request)
    {
        $moves = Move::create($request->all());

        return response()->json($moves, 201);
    }

    public function clicks(Request $request)
    {
        $clicks = Click::create($request->all());

        return response()->json($clicks, 201);
    }

    public function users(Request $request)
    {
        $users = User::create($request->all());

        return response()->json($users, 201);
    }
}
