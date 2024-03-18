<?php

namespace App\Http\Controllers;

use App\Models\UserModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
        // $userCount = UserModel::where('level_id', 2)->count();
        // return view('user_count', ['userCount' => $userCount]);

        // $user = UserModel::firstwhere('level_id', 1);
        // return view('user', ['data' => $user]);
        
        // $data = [
        //     'username' => 'manager-tiga',
        //     'nama' => 'manager_3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::create($data);

        // $data = [
        //     'nama' => 'Pelanggan Pertama'
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $user = UserModel::all();

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );
        // $user -> save();

        // return view('user', ['data' => $user]);

        // $user = UserModel::create(
        //     [
        //         'username' => 'manager55',
        //         'nama' => 'Manager55',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user->username = 'manager56';

        // $user -> isDirty();                     //t
        // $user -> isDirty('username');           //t
        // $user -> isDirty('nama');               //f
        // $user -> isDirty('nama','username');    //t

        // $user -> isClean();                     //f
        // $user -> isClean('username');           //f
        // $user -> isClean('nama');               //t
        // $user -> isClean('nama','username');    //f

        // $user->save();

        // $user->isDirty();                       //f
        // $user->isClean();                       //t
        // dd($user->isDirty());

        // $user = UserModel::create(
        //             [
        //                 'username' => 'manager11',
        //                 'nama' => 'Manager11',
        //                 'password' => Hash::make('12345'),
        //                 'level_id' => 2
        //             ]
        //         );
        //         $user->username = 'manager12';
        //         $user->save();
        
        //         $user -> wasChanged();
        //         $user -> wasChanged('username');
        //         $user -> wasChanged(['username','level_id']);
        //         $user -> wasChanged('nama');
        //         dd($user->wasChanged(['nama','username']));

        $user=UserModel::all();
        return view('user',['data' => $user]);
    }

    public function tambah(){
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username'=> $request->username,
            'nama'=> $request->nama,
            'password'=>Hash::make('$request->password'),
            'level_id'=> $request->level_id
        ]);

        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data'=>$user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
}
