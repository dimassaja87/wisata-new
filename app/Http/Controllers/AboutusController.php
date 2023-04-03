<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AboutusController extends Controller
{
    public function dataaboutus(Request $request)
    {

        if ($request->has('search')) {
            $data = Aboutus::where('nama', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = Aboutus::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelaboutus.dataaboutus', compact('data'));
    }

    public function tambahaboutus()
    {
        $data = Aboutus::all();
        return view('admin.tabelaboutus.tambahaboutus', compact('data'));
    }

    public function insertaboutus(Request $request)
    {
        $data = Aboutus::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/fotoaboutus/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dataaboutus')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilaboutus(Request $request, $id)
    {
        $data = Aboutus::findorfail($id);

        return view('admin.tabelaboutus.tampilaboutus', compact('data'));
    }

    public function updateaboutus(Request $request, $id)
    {
        $data = Aboutus::find($id);
        $data->update($request->all());

        if ($request->hasFile('foto')) {
            $destination = 'foto/fotoaboutus/' . $data->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $request->file('foto')->move('foto/fotoaboutus/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->update();
        return redirect()->route('dataaboutus')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deleteaboutus($id)
    {
        $data = Aboutus::find($id);
        $data->delete();
        return redirect()->route('dataaboutus')->with('success', 'Data Behasil Di Hapus!');
    }

    public function search(Request $request){
        if($request->has('search')) {
            $kota = Aboutus::where('nama','LIKE','%'.$request->search. '%')->get();
        }else{
            $kota = Aboutus::all();
        }
        return view('user.kota.bali',['kota' => $kota]);
    }
}
