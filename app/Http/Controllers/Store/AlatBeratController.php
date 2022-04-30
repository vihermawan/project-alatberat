<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JenisAlat;
use App\Models\TipeAlat;
use App\Models\Proyek;

class AlatBeratController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexJenis(){
        $allProyek = Proyek::all();
        return view('store.alat_berat.jenis.index',compact('allProyek'));
    }

    public function listJenisAlat(){
        $allJenisAlat = JenisAlat::select('jenis_alat.*', 'proyek.nama as nama_proyek','proyek.id')
                        ->leftJoin('proyek', 'jenis_alat.id_proyek', '=', 'proyek.id')
                        ->get();
        return $allJenisAlat;
    }

    public function filterJenisAlat($id){
        $allJenisAlat = JenisAlat::where('jenis_alat.id_proyek','=',$id)
                        ->get();
        return $allJenisAlat;
    }

    public function storeJenisAlat(Request $request)
    {
        $request->validate([
            'id_proyek' => 'required',
            'nama' => 'required',
        ]);

        $jenisAlat = New JenisAlat;
        $jenisAlat->id_proyek = $request->id_proyek;
        $jenisAlat->nama = $request->nama; 
        $jenisAlat->save();

        return $jenisAlat;
    }

    public function updateJenisAlat(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        return JenisAlat::find($id)->update($request->all());
    }

    public function destroyJenisAlat($id)
    {
       return JenisAlat::find($id)->delete();
    }
    
    public function indexTipe(){
        $allJenisAlat= JenisAlat::all();
        return view('store.alat_berat.tipe.index',compact('allJenisAlat'));
    }

    public function listTipeAlat(){
        $allTipeAlat = TipeAlat::select('tipe_alat.*', 'jenis_alat.nama as nama_jenis_alat','jenis_alat.id')
                    ->leftJoin('jenis_alat', 'tipe_alat.id_jenis_alat', '=', 'jenis_alat.id')
                    ->get();
        return $allTipeAlat;
    }

    public function filterTipeAlat($id){
        $allTipeAlat = TipeAlat::where('tipe_alat.id_jenis_alat','=',$id)
                    ->get();
        return $allTipeAlat;
    }

    public function storeTipeAlat(Request $request)
    {
        $request->validate([
            'id_jenis_alat' => 'required',
            'nama' => 'required',
        ]);

        $tipeAlat = New TipeAlat;
        $tipeAlat->id_jenis_alat = $request->id_jenis_alat;
        $tipeAlat->nama = $request->nama; 
        $tipeAlat->save();

        return $tipeAlat;
    }

    public function updateTipeAlat(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        return TipeAlat::find($id)->update($request->all());
    }

    public function destroyTipeAlat($id)
    {
       return TipeAlat::find($id)->delete();
    }
   
}
