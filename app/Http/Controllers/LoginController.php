<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WisataDetail;
use App\Models\KotaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


 use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class LoginController extends Controller
{
    public function loginadmin()
    {
        return view('admin.loginadmin');
    }

    public function loginadmindua(Request $request)
    {
        if (FacadesAuth::attempt($request->only('email', 'password'))) {
            return redirect('/adminn')->with('success', 'Anda Behasil Login!');
        }

        return \redirect('loginadmin')->with('error', 'Email atau Password anda salah!');
    }

    public function logoutadmin()
    {
        return view('admin.logoutadmin');
    }

    //user
    public function login()
    {
        return view('user.login');
    }

    public function loginuserdua(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }

        $errors = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $errors['email'])->first();
        if ($user && $user->is_banned){
        // dd($user);
            return redirect('login')->withErrors(['error'=>'Maaf Akun anda telah di banned!']);
        }
        return redirect('login')->with('error', 'Email atau Password anda salah!');
    }
    public function password()
    {
        return view('user.password');
    }

    public function passworduser(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('sukses','Password diubah!');
        }

    public function logoutuser(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('success', 'Anda Berhasil Logout!');

    }

    public function register()
    {
        return view('user.register');
    }

    public function registeruser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:50',
            'password_confirmation' => 'required|same:password',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);

        return redirect('/login');
    }


    public function editprofil()
    {
        $data = User::all();

        return view('profile.editprofile', compact('data'));
    }
    public function updateprofil(Request $request,$id)
    {
        $data = User::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')){
            $data->foto = $request->file('foto')->store('foto','public');
        }
        $data->save();

        return redirect("/profil/{$data->id}")->with('sukses','Data Berhasil di Perbarui');
    }

    public function Profil($id)
    {
            $kotadetail = KotaDetail::all();
            $data = WisataDetail::where('id_user', $id)
            ->paginate(5);
            $user = Auth::user();
            if ($user->id != $id) {
           abort(403, 'Unauthorized action.');
}

        return view('profile.profil',compact('data','kotadetail'));
    }

    public function deletedetailwisata($id)
    {
        $data = WisataDetail::find($id);
        $data->delete();
        return redirect()->route('detailwisata')->with('success', 'Data Behasil Di Hapus!');
    }
    public function deletedetailwisata1($id)
    {
        $data = WisataDetail::find($id);
        $data->delete();
        // return redirect()->back
        return redirect()->back()->with('success', 'Data Behasil Di Hapus!');
    }
    public function multidelete()
        {
            Schema::disableForeignKeyConstraints();
            \App\Models\WisataDetail::truncate();
            Schema::enableForeignKeyConstraints();

            toastr()->success('Seluruh Data Berhasil Di Hapus');
            return redirect()->back()->with('success','Seluruh Data Berhasil Di Hapus');
        }

    public function tampilwisata($id)
        {
            $data = WisataDetail::find($id);
            $kotadetail = KotaDetail::all();

            return view('profile.editwisata', compact('data', 'kotadetail'));
        }
}
