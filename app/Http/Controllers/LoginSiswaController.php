<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Session;
use App\Models\Users;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;


class LoginSiswaController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function loginSiswa(Request $request){
        $request->validate([
            'nisn' => 'required',
            'password' => 'required'
        ], [
            'nisn.required' => 'nisn Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);


        // if ($request->nisn) {
        //     $id_siswa = Siswa::where('nisn', $request->nisn)->value('id_siswa');
        // } else {
        //     // Handle jika NISN NULL, misalnya:
        //     return redirect('/login')->withErrors('NISN harus diisi')->withInput();
        // }

        $id_siswa = Siswa::where('nisn', $request->nisn)->value('id');

        if (!$id_siswa) {
            return redirect('/login')->withErrors('NISN harus diisi')->withInput();
        }
    

        $loginsiswa = [
            'id_siswa' => $id_siswa,
            'password' => $request->password,
        ];

        if(Auth::attempt($loginsiswa)){
            return redirect('/admin/siswa')->with('status', 'Data berhasil ditambah!');
        }else{
            return redirect('/login')->withErrors('NISN dan password Salah')->withInput();
        }
    }


    public function logoutSiswa(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');

    }
}
