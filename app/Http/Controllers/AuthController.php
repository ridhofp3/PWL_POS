<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            if ($user->level == '1') {
                return redirect()->intended('admin');
            } else if ($user->level == '2') {
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $kredensil = $request->only('username', 'password');
        if (Auth::attempt($kredensil)) {
            $user = Auth::user();

            if ($user->level == '1') {
                return redirect()->intended('admin');
            } else if ($user->level == '2') {
                return redirect()->intended('manager');
            }
            return redirect()->intended('/');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Patikan kembali username dan password yang dimasukkan sudah benar']);
    }

    public function register()
    {
        return view('register');
    }

    public function proses_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:UserModel',
            'password' => 'required',
        ]);

        $request['level_id'] = '2';
        $request['password'] = Hash::make($request['password']);

        UserModel::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
