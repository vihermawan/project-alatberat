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
        return view('store.alat_berat.tipe.index');
    }

    public function listTipeAlat(){
        $allTipeAlat = TipeAlat::all();
        return $allTipeAlat;
    }

    public function storeTipeAlat(Request $request)
    {
        $request->validate([
            'id_jenis_alat' => 'required',
            'nama' => 'required',
        ]);

        $jenisAlat = New JenisAlat;
        $jenisAlat->id_jenis_alat = $request->id_jenis_alat;
        $jenisAlat->nama = $request->nama; 
        $jenisAlat->save();

        return $jenisAlat;
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
