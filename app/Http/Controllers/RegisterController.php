<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\client;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
try{




        $request->validate([
//user--------------------------------------------------
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
//client-------------------------------------------------
            'sex' => 'required|string',        
            'birth_date' => 'required|date',
            'client_position_id' => 'required|exists:client_position,client_position_id',
            'agency_name' => 'required|string',
            'agency_address' => 'required|string', 
        ]);


        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

       $client = client ::create([
            'sex' => $request->sex,
            'birth_date' => $request-> birth_date,
            'agency_name' => $request-> agency_name,
            'email' => $request->email,
            'agency_address' => $request-> agency_address,
             'client_position_id' => $request->client_position_id,
             'user_id' => $user->user_id,
             'client_name' => $user->first_name . ' ' . $user->last_name,
        ]);
         
    
        return response()->json(['user' => $user, 'client' => $client]);
   
    } catch(\Exception $e){
        return response()->json(['error'=>$e->getMessage()], 500); 

    }
 }
}       
