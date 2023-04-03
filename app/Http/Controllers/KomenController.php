<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class KomenController extends Controller
{
    public function komenlembang()
    {
        $komen = Komen::all();
        return view('user.wisata.lembang',['komen'=> $komen]);
    }
    public function komenanyer()
    {
        $komen = Komen::all();
        return view('user.wisata.anyer',['komen'=> $komen]);

    }
    public function komenayana()
    {
        $komen = Komen::all();
        return view('user.wisata.ayana',['komen'=> $komen]);

    }
    public function komenjatim()
    {
        $komen = Komen::all();
        return view('user.wisata.jatim',['komen'=> $komen]);

    }
    public function komenkawah()
    {
        $komen = Komen::all();
        return view('user.wisata.kawah',['komen'=> $komen]);

    }
    public function komenkya()
    {
        $komen = Komen::all();
        return view('user.wisata.kya',['komen'=> $komen]);

    }
    public function komenlawang()
    {
        $komen = Komen::all();
        return view('user.wisata.lawang',['komen'=> $komen]);

    }
    public function komenmuseum()
    {
        $komen = Komen::all();
        return view('user.wisata.museumangkut',['komen'=> $komen]);

    }
    public function komenpandawa()
    {
        $komen = Komen::all();
        return view('user.wisata.pandawa',['komen'=> $komen]);

    }
    public function komenpanglipuran()
    {
        $komen = Komen::all();
        return view('user.wisata.panglipuran',['komen'=> $komen]);

    }
    public function komenpeuncang()
    {
        $komen = Komen::all();
        return view('user.wisata.peuncang',['komen'=> $komen]);

    }
    public function komensanterra()
    {
        $komen = Komen::all();
        return view('user.wisata.santerra',['komen'=> $komen]);

    }
    public function komentanahlot()
    {
        $komen = Komen::all();
        return view('user.wisata.tanahlot',['komen'=> $komen]);

    }

    public function ulasan(Request $request)
    {

        if ($request->has('search')) {
            $data = Komen::where('nama', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = Komen::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelulasan.dataulasan', compact('data'));
    }

    public function tambahulasan()
    {
        $data = Komen::all();
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        // $kotadetail = KotaDetail::all();
        return view('admin.tabelulasan.tambahulasan', compact('data'));
    }

    public function insertulasan(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = Komen::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/fotokomen/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('ulasan')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilulasan($id)
    {
        $data = Komen::find($id);
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        // $kotadetail = KotaDetail::all();
        // dd($data);
        return view('admin.tabelulasan.tampilulasan', compact('data'));
    }

    public function updateulasan(Request $request, $id)
    {
        $data = Komen::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto'))
        {
            $destination = 'foto/fotokomen/'.$data->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('foto')->move('foto/fotokomen/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }

        return redirect()->route('ulasan')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deleteulasan($id)
    {
        $data = Komen::find($id);
        $data->delete();
        return redirect()->route('ulasan')->with('success', 'Data Behasil Di Hapus!');
    }

    public function insertkomen(Request $request)
    {
        $data = Komen::create([
            // 'komentar_id' => $request->komentar_id,
            'nama' => $request->nama,
            'foto' => $request->foto,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/fotokomen/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

            return back()->with('success', 'Data Behasil Ditambahkan!');
        }
    }
}
