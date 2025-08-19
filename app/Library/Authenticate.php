<?php

namespace App\Library;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class Authenticate
{
    public function authGoogle($data)
    {
        $user = User::where('email', $data->email)->first();
        dd($data);
        if (!$user) {
            $user = User::create([
                'name' => $data->name ?? $data->givenName,
                'email' => $data->email,
                'password' => Hash::make('Admin@123'),
            ]);
        }

        Auth::login($user);

        return redirect('/home');
    }

    public function logout()
    {
        $auth = new Authenticate();
        return $auth->logout();
    }


}
