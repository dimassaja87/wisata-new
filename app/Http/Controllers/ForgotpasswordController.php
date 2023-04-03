<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;

class ForgotpasswordController extends Controller
{
    public function create(){
        return view('user.lupapassword');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required','email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status = Password::RESET_LINK_SENT
            ? back()->with('status', ($status))
            : back()->withInput($request->only('email'))
                    ->withErrors(['email'=>($status)]);
    }

    public function reset(Request $request){
        return view('user.password',['request'=>$request]);
    }

    public function rapli(Request $request){
        $request->validate([
            'token' => ['required'],
            'email' => ['required','email'],
            'password' => ['required', 'confirmed'],

        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function($user) use ($request){
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' =>Str::random(60),

                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('success', ($status))
                : back()->withInput($request->only('email'))
                        ->withErrors(['email' => ($status)]);
    }
    public function editpw(){
        return view('user.editpassword');
    }
    public function updatepassword(request $request){
        $request->validate([
            'password' => 'required|min:6|max:100|confirmed',
            'password_confirmation' => 'required'
        ], [
            'password.required' => 'sandi baru harus diisi',
            'password.min' => 'sandi harus lebih dari 6',
            'password.confirmed' => 'sandi ini harus sama dengan sandi baru',
            'password_confirmation.required' => 'konfirmasi sandi harus diisi',

        ]);

        $data = User::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $data->password)) {
            return back()->with(['current_password' => 'Password Yang Anda Masukkan Salah ']);
        }
        $data->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('profil')->with('success', 'Password Berhasil DiUpdate');
    }
    protected function broker()
{
    return Password::broker('terms');
}
}
