<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class PenggunaController extends Controller
{
    public function pengguna()
    {
        $data = User::paginate(5);
        return view('admin.tabeluser.datauser', compact('data'));
    }

    public function tambahpengguna()
    {
        $data = Pengguna::all();
        return view('admin.tabeluser.tambahuser', compact('data'));
    }

    public function insertpengguna(Request $request)
    {
        $data = User::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopengguna/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

            return redirect()->route('pengguna')->with('success', 'Data Behasil Ditambahkan!');
        }
    }

    public function tampilpengguna($id)
    {
        $data = User::find($id);
        return view('admin.tabeluser.tampiluser', compact('data'));
    }

    public function updatepengguna(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')){
            $data->foto = $request->file('foto')->store('foto','public');
        }
        $data->save();

        return redirect()->route('pengguna')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deletepengguna($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('pengguna')->with('success', 'Data Behasil Di Hapus!');
    }
    public function unbannedUser($id)
    {
        $user = Pengguna ::findorFail($id);
        $user->unbanned();

        return redirect()->back();
    }
    public function bannedUser($id)
    {
        $user = User::findorFail($id);
        $user->banned();

        return redirect()->back();
    }
    public function ban(Request $request)
    {
        $keyword = $request->keyword;
        $bannedUser = Pengguna::where('id_banned', true)->get();
        $data =  Pengguna::where('name','LIKE','%' .$keyword.'%')
        ->paginate();
        return view ('admin.tabeluser.ban', compact('data'));
    }

}
