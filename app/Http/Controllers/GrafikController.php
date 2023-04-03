<?php

namespace App\Http\Controllers;

use App\nama;
use App\Models\Grafik;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class GrafikController extends Controller
{
    
    public function index()
{
    $wisata=Wisata::all();

    //data chart
    $categories = [];
    foreach($wisata as $mp){
        $categories[] = [
            'nama_wisata' => $mp->nama_wisata
        ];
    }
    // dd($categories);

    return view('grafik', ['wisata'=>$wisata,'categories'=>$categories]);
}
    
}
    

