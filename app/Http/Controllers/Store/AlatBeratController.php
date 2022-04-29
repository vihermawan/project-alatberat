<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlatBeratController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexTipe(){
        return view('store.alat_berat.tipe.index');
    }

    public function indexJenis(){
        return view('store.alat_berat.jenis.index');
    }
}
