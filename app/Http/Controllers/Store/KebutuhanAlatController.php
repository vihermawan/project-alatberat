<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proyek;
use App\Models\TipeAlat;
use App\Models\VolumePekerjaan;
use App\Models\Produktivitas;
use App\Models\KebutuhanAlat;


class KebutuhanAlatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $allProyek = Proyek::all();
        $allVolumePekerjaan = VolumePekerjaan::all();
        return view('store.kebutuhan_alat.index',compact('allProyek','allVolumePekerjaan'));
    }

    public function listKebutuhanAlat(){
        $allKebutuhanAlat = KebutuhanAlat::select('kebutuhan_alat.*','jenis_alat.nama as nama_jenis_alat',
                            'jenis_alat.id as id_jenis_alat', 'tipe_alat.nama as nama_tipe_alat','tipe_alat.id as id_tipe_alat')
                            ->join('tipe_alat', 'kebutuhan_alat.id_tipe_alat', '=', 'tipe_alat.id')
                            ->join('jenis_alat','tipe_alat.id_jenis_alat','=','jenis_alat.id')
                            ->get();
        return $allKebutuhanAlat;
    }

    public function filterKebutuhanAlat($id){
        $allKebutuhanAlat = KebutuhanAlat::select('kebutuhan_alat.*','jenis_alat.nama as nama_jenis_alat',
                'jenis_alat.id as id_jenis_alat', 'tipe_alat.nama as nama_tipe_alat','tipe_alat.id as id_tipe_alat')
                ->join('tipe_alat', 'kebutuhan_alat.id_tipe_alat', '=', 'tipe_alat.id')
                ->join('jenis_alat','tipe_alat.id_jenis_alat','=','jenis_alat.id')
                ->where('jenis_alat.id', '=', $id)
                ->get();
        return $allKebutuhanAlat;
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
