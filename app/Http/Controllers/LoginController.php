<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $client = $user->client;

            $response = [
                'email' => $user->email,
                'user_id' => $user->user_id,
                'client_id' => $client->client_id,
                'role_id' => $user->role_id,
                'token' => $user->createToken('MyApp')->plainTextToken,
            ];
            $request->session()->regenerate();
            return response()->json($response);
            // $request->session()->regenerate();
            // return redirect()->intended('/daftartalent');
        }
        $user = User::where('email', $request->email)->first();

        if ($user) {
            return redirect()->back()->with('error', 'Password tidak sesuai.')->withInput();
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan server. Silahkan coba kembali.')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
