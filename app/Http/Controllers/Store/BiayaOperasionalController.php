<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proyek;
use App\Models\BiayaOperasional;


class BiayaOperasionalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $allProyek = Proyek::all();
        return view('store.biaya_operasional.index',compact('allProyek'));
    }

    public function listBiayaOperasional(){
        $allBiayaOperasional = BiayaOperasional::select('biaya_operasional.*','tipe_alat.nama as nama_tipe_alat','tipe_alat.id as id_tipe_alat')
                            ->join('tipe_alat', 'biaya_operasional.id_tipe_alat', '=', 'tipe_alat.id')
                            ->get();
        return $allBiayaOperasional;
    }

    public function filterBiayaOperasional($id){
        $allBiayaOperasional = BiayaOperasional::select('biaya_operasional.*','tipe_alat.nama as nama_tipe_alat','tipe_alat.id as id_tipe_alat')
                ->join('tipe_alat', 'biaya_operasional.id_tipe_alat', '=', 'tipe_alat.id')
                ->where('tipe_alat.id', '=', $id)
                ->get();
        return $allBiayaOperasional;
    }

    public function store(Request $request)
    {   

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
       return BIayaOperasional::find($id)->delete();
    }
}
