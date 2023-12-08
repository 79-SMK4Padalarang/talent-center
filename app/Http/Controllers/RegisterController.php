<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\client;
use Carbon\Carbon;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
            //user--------------------------------------------------
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => [
                    'required',
                    'string',
                    'email:dns',
                    // function ($attribute, $value, $fail) {
                    //     $userCount = User::where('email', $value)->count();
                    //     $clientCount = client::where('email', $value)->count();
        
                    //     if ($userCount > 0 || $clientCount > 0) {
                    //         // dd($userCount);
                    //         return redirect()->back()->with('error', 'Email sudah digunakan')->withInput();
                    //     }
                    // },
                ],
                'password' => 'required|min:8',
            //client-------------------------------------------------
                'sex' => 'required|string',
                'birth_date' => 'required|date_format:d/m/Y',
                'client_position_id' => 'required|exists:client_position,client_position_id',
                'agency_name' => 'required|string',
                'agency_address' => 'required|string',
            ]);

            $userCount = User::where('email', $request->email)->count();
            $clientCount = client::where('email', $request->email)->count();

            if ($userCount > 0 || $clientCount > 0) {
                return redirect()->back()->with('email_error', 'Email sudah digunakan')->withInput();
            }

            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $birth_date = Carbon::createFromFormat('d/m/Y', $request->birth_date)->format('Y-m-d');

            $client = client ::create([
                'sex' => $request->sex,
                'birth_date' => $birth_date,
                'agency_name' => $request-> agency_name,
                'email' => $request->email,
                'agency_address' => $request-> agency_address,
                'client_position_id' => $request->client_position_id,
                'user_id' => $user->user_id,
                'client_name' => $user->first_name . ' ' . $user->last_name,
            ]);

            return redirect()->back()->with('success', 'Berhasil mendaftarkan user');
        
            return response()->json(['user' => $user, 'client' => $client]);

        } catch (\Throwable $e) {
            return response()->json(['Terjadi kesalahan: '=>$e->getMessage()], 500);

            return redirect()->back()->with('other_error', 'Terjadi kesalahan server. Silahkan coba kembali.');
        }
    }
}
