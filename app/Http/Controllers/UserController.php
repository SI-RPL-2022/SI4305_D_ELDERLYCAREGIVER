<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Redirector;
use File;


class UserController extends Controller

{
    public function pengasuh() {
        return view('pengasuh.regispengasuh', [
            "head" => "Register Pengasuh | Elderly Caregiver"
        ]);
    }

    
    public function detail(user $user) {
        return view('admin.detailuserpengasuh', compact('user'),[
            
            "head" => "detail User | Elderly Caregiver",
        ]);
    }

    public function download(Request $request) {
        return response()->download(public_path('storage/'.$request['cv']));
        
    }
    
    public function pelamardel(Request $request) {

        $user = User::find($request->id);
        $profile = profile::where('user_id', $request->id)->first();
        Storage::delete($profile->ktp);
        
        if($profile->cv) {  
        Storage::delete($profile->cv);
            }

        if($profile->foto) {  
            Storage::delete($profile->foto);
            }

        $user->delete();
        return redirect('/dashboard')->with('status', 'Data berhasil di hapus');

    }

    public function konfirmasi(Request $request) {
        // @dd($request);
        user::where('id', $request->id)->update([
            'status' => 'pengasuh'
        ]); 

        return redirect('/listpengasuh')->with('status', 'Pengasuh berhasil ditambahkan');
    }
    

    public function user() {
        return view('user.regisuser', [
            "head" => "Register User | Elderly Caregiver"
        ]);
    }

    public function loginview() {
        return view('login', [
            "head" => "Login | Elderly Caregiver"
        ]);
    }

    public function listpengasuh() {

        return view('admin.listpengasuh', [

            "data" => user::where('status', 'pelamar')->get(),
            "head" => "Admin | Elderly Caregiver"
        ]);
    }

    
    public function listuser() {

        return view('admin.listuser', [

            "data" => user::where('status', '!=', 'admin')->where('status', '!=', 'pelamar')->get(),
            "head" => "Admin | Elderly Caregiver"
        ]);
    }

    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        // dd($credentials);
        if(Auth::attempt($credentials )) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('login', 'login Gagal Tolong masukan data dengan benar');
    }


    public function logout(Request $request) {
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }

    public function registeruser (Request $request) {
        $validateuser = $request->validate([
            'username' => 'required|max:32|unique:users',
            'email' => 'required|email:dns|unique:users|unique:users',
            'password' => 'required|min:8',
            'status' => 'required',
        ]);
        
        $validateprofile = $request->validate([
            'nama' => 'required|max:32',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'usia' => 'required',
            'ktp' => 'image',
            'foto' => 'image|required',
        ]);

        if($request->file('ktp')) {
            $validateprofile['ktp'] = $request->file('ktp')->store('ktp');
        }

        $validateprofile['foto'] = $request->file('foto')->store('foto_profile');

        $validateuser['password'] = hash::make($validateuser['password']);

        User::create($validateuser);

        $user_id = User::where('username', $validateuser['username'])->first();
        $validateprofile['user_id'] = $user_id['id'] ;

        profile::create($validateprofile);

        return redirect('/')->with('status', 'Registration berhasil silakan melakukan login ^_^');
    }

    public function registerpelamar(Request $request) {

        $validateuser = $request->validate([
            'username' => 'required|max:32|unique:users',
            'email' => 'required|email:dns|unique:users|unique:users',
            'password' => 'required|min:8',
            'status' => 'required',
        ]);
        
        $validateprofile = $request->validate([
            'nama' => 'required|max:32',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'usia' => 'required',
            'ktp' => 'image|required',
            'cv' => 'mimes:pdf|required',
            'foto' => 'image|required',
        ]);

        // Validasi file
        $validateprofile['ktp'] = $request->file('ktp')->store('ktp');

        $validateprofile['cv'] = $request->file('cv')->store('cv');
        
        $validateprofile['foto'] = $request->file('foto')->store('foto_profile');
        // validasi file

        $validateuser['password'] = hash::make($validateuser['password']);

        User::create($validateuser);

        $user_id = User::where('username', $validateuser['username'])->first();
        $validateprofile['user_id'] = $user_id['id'] ;

        profile::create($validateprofile);

        return redirect('/')->with('status', 'Akun anda sedang di proses, Silakan menunggu akun anda diaktivasi oleh kami ^_^ ');
    }

    public function detailuser($id) {
        
        $datas = profile::where('user_id', $id)->first();
        $datas2 = user::where('id', $id)->first();

        return view('user/infopengasuh', compact('datas', 'datas2'));
    }
}
