<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AutfController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Poruka:' => $validator->errors()
            ]);
        }

        $korisnik = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'Poruka:' => 'Korisnik je kreiran',
            'Korisnik:' => $korisnik
        ]);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Poruka:' => $validator->errors()
            ]);
        }


        $korisnik = User::where('email', $request->email)->first();

        if (!$korisnik || !Hash::check($request->password, $korisnik->password)) {
            return response()->json([
                'Poruka:' => 'Pogresan password ili username',
            ]);
        } else {
            $token = $korisnik->createToken('TOKEN-LOGIN')->plainTextToken;
            return response()->json([
                'Poruka:' => 'Korisnik je ulogovan',
                'Korisnik:' => $korisnik,
                'Token:' => $token
            ]);
        }
    }


    public function logout(){

        auth()->user()->tokens()->delete();
        return response()->json([
            'Poruka:' => 'Korisnik je izlogovan',
        ]);
    }


}
