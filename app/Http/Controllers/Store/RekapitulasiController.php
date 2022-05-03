<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produktivitas;
use App\Models\KebutuhanAlat;

class RekapitulasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $allProduktivitas = Produktivitas::select('produktivitas.*','jenis_alat.nama as nama_jenis_alat',
                            'jenis_alat.id as id_jenis_alat', 'tipe_alat.nama as nama_tipe_alat','tipe_alat.id as id_tipe_alat')
                            ->join('tipe_alat', 'produktivitas.id_tipe_alat', '=', 'tipe_alat.id')
                            ->join('jenis_alat','tipe_alat.id_jenis_alat','=','jenis_alat.id')
                            ->get();

        $allKebutuhanAlat = KebutuhanAlat::select('kebutuhan_alat.*','jenis_alat.nama as nama_jenis_alat',
                            'jenis_alat.id as id_jenis_alat', 'tipe_alat.nama as nama_tipe_alat','tipe_alat.id as id_tipe_alat')
                            ->join('tipe_alat', 'kebutuhan_alat.id_tipe_alat', '=', 'tipe_alat.id')
                            ->join('jenis_alat','tipe_alat.id_jenis_alat','=','jenis_alat.id')
                            ->get();
       
   
        return view('store.rekapitulasi.index',compact('allProduktivitas','allKebutuhanAlat'));
    }
}
