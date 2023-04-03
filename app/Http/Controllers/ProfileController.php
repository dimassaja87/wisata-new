<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.profil',compact('data'));
    }
    public function profil()
    {
        $data=Destinasi::all();
        return view('profile.profil',compact('data'));
    }
    public function updateprofile(Request $request)
    {
        $data = Profile::create([
            'nama' => $request->nama,
            'foto' => $request->foto,
            'email' => $request->email,
            'keterangan' => $request->keterangan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoprofile/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

            return back()->with('success', 'Data Behasil Ditambahkan!');
        }
    }
}
