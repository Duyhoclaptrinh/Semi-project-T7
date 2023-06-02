<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => ['required', 'image']
        ]);
    }
    protected function storeImage(Request $request) {
        $path = $request->file('photo')->store('public/profile');
        return substr($path, strlen('public/'));
      }

}
