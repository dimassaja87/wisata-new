<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RatingController extends Controller
{
    public function rating(Request $request)
    {

        if ($request->has('search')) {
            $data = Rating::where('nama', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = Rating::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelrating.datarating', compact('data'));
    }

    public function tambahrating()
    {
        $data = Rating::all();
        // $jurusan = Jurusan::all();
        $destinasi = Destinasi::all();
        return view('admin.tabelrating.tambahrating', compact('data', 'destinasi'));
    }

    public function insertrating(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = Rating::create($request->all());
        // if ($request->hasFile('foto')) {
        //     $request->file('foto')->move('fotorating/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        return redirect()->route('rating')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilrating($id)
    {
        $data = Rating::find($id);
        // $jurusan = Jurusan::all();
        $destinasi = Destinasi::all();
        // dd($data);

        return view('admin.tabelrating.tampilrating', compact('data', 'destinasi'));
    }

    public function updaterating(Request $request, $id)
    {
        $data = Rating::find($id);
        $data->update($request->all());
        if (session('halaman_url')) {
            return Redirect(session('halaman_url'))->with('success', 'Data Behasil Di Ubah!');
        }
        return redirect()->route('rating')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deleterating($id)
    {
        $data = Rating::find($id);
        $data->delete();
        return redirect()->route('rating')->with('success', 'Data Behasil Di Hapus!');
    }
}
