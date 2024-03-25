<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $request->email)->firstOrFail();

        if (Hash::check($request->password, $user->password)) {
            return parent::toArray($user);
        }else{
            return response()->json(['message' => 'Email ó contraseña equivacada.'], 404);
        }

    }
}
