<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VolumePekerjaan;

class VolumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('store.volume.index');
    }

    public function listVolumePekerjaan(){
        $allVolumePekerjaan = VolumePekerjaan::all();
        return $allVolumePekerjaan;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nilai' => 'required',
        ]);

        $volumePekerjaan = New VolumePekerjaan;
        $volumePekerjaan->nama = $request->nama;
        $volumePekerjaan->nilai = $request->nilai; 
        $volumePekerjaan->save();

        return $volumePekerjaan;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nilai' => 'required',
        ]);

        $volumePekerjaan = VolumePekerjaan::find($id);
        $volumePekerjaan->nama = $request->nama;
        $volumePekerjaan->nilai = $request->nilai; 
        $volumePekerjaan->save();

        return $volumePekerjaan;
    }

    public function destroy($id)
    {
       return VolumePekerjaan::find($id)->delete();
    }
}
