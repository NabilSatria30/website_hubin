<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\BiodataSiswa;

class SesiController extends Controller
{
    function index(){
        return view('logins');
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required'=> 'Username Wajib Diisi',
            'password.required'=> 'Password Wajib Diisi',
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            $user = Auth::user();

            if($user->role === 'admin'){
                return redirect('dashboard_admin');
            } 
            else if ($user->role === 'guru'){
                return redirect('dashboard_gurujurusan');
            } 
            else if ($user->role === 'siswa'){

                // CEK BIODATA
                $biodata = BiodataSiswa::where('user_id', $user->id)->first();

                if (!$biodata) {
                    // PAKSA ISI BIODATA
                    return redirect()->route('biodata.create');
                }

                // Jika sudah punya biodata → langsung ke dashboard
                return redirect()->route('dashboard_siswa');
            } 
            else {
                Auth::logout();
                return redirect('/')->withErrors('Role Tidak Dikenali');
            }

        } else {
                return redirect()->back()
                    ->withErrors('Username dan password yang dimasukkan Salah')
                    ->withInput();
    
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
