<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriBiayaSewaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('store.kategori.biaya_sewa.index');
    }
}
