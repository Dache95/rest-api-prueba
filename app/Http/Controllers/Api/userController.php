<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function index() {
        $users = User::all();

        return $users->isNotEmpty()
            ? response()->json($users, 200)
            : response()->json(['message' => 'No se encontraron usuarios'], 404);
    }

}
