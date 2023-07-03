<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Session;
use App\Models\Users;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;

class LoginGuruController extends Controller
{
    public function index(){
        return view('auth.loginGuru');
    }

    public function loginGuru(Request $request){
        $request->validate([
            'NIP' => 'required',
            'password' => 'required'
        ], [
            'NIP.required' => 'NIP Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);


        $id_guru = Guru::where('NIP', $request->NIP)->value('id');

        if (!$id_guru) {
            return redirect('/loginGuru')->withErrors('NIP harus diisi')->withInput();
        }
    

        $loginsiswa = [
            'id_guru' => $id_guru,
            'password' => $request->password,
        ];

        if(Auth::attempt($loginsiswa)){
            return redirect('/admin/guru')->with('status', 'Data berhasil ditambah!');
        }else{
            return redirect('/login')->withErrors('NISN dan password Salah')->withInput();
        }
    }


    public function logoutGuru(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/loginGuru');

    }
}
