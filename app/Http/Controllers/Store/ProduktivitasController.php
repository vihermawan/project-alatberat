<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produktivitas;
use App\Models\Proyek;
use App\Models\TipeAlat;

class ProduktivitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $allProyek = Proyek::all();
        return view('store.produktivitas.index',compact('allProyek'));
    }

    public function listProduktivitas(){
        $allProduktivitas = Produktivitas::select('produktivitas.*','jenis_alat.nama as nama_jenis_alat',
                            'jenis_alat.id as id_jenis_alat', 'tipe_alat.nama as nama_tipe_alat','tipe_alat.id as id_tipe_alat')
                            ->join('tipe_alat', 'produktivitas.id_tipe_alat', '=', 'tipe_alat.id')
                            ->join('jenis_alat','tipe_alat.id_jenis_alat','=','jenis_alat.id')
                            ->get();
        return $allProduktivitas;
    }

    public function store(Request $request)
    {     
        if($request->id_jenis_alat[1] == "Hydraulic Excavator"){
            $request->validate([
                'hydraulic.waktu_putar' => 'required',
                'hydraulic.kecepatan_putar' => 'required',
                'hydraulic.conversion_factor' => 'required',
                'hydraulic.bucket_fill_factor' => 'required',
                'hydraulic.faktor_kedalaman' => 'required',
                'hydraulic.faktor_efisiensi_kerja' => 'required',
            ]);
            
            $tipeAlat = TipeAlat::where('id',$request->id_tipe_alat)->first();

            $standarCycleTime =$request->hydraulic["waktu_putar"] / $request->hydraulic["kecepatan_putar"];
            
            $cms = $request->hydraulic["conversion_factor"] * round($standarCycleTime,3);

            $hasil = $tipeAlat->kapasitas_bucket * (60/$cms) * $request->hydraulic["faktor_kedalaman"] * $request->hydraulic["bucket_fill_factor"] * $request->hydraulic["faktor_efisiensi_kerja"];
            
            $parameter = [
                'standart_cycle_time' => round($standarCycleTime,3),
                'waktu_putar' => $request->hydraulic["waktu_putar"],
                'kecepatan_putar' => $request->hydraulic["kecepatan_putar"],
                'cms' => $cms,
                'conversion_factor' =>$request->hydraulic["conversion_factor"],
                'kapasitas_bucket' => $tipeAlat->kapasitas_bucket,
                'bucket_fill_factor' => $request->hydraulic["bucket_fill_factor"],
                'faktor_kedalaman' => $request->hydraulic["faktor_kedalaman"],
                'faktor_efisiensi_kerja' => $request->hydraulic["faktor_efisiensi_kerja"]
            ];

            $produktivitas = New Produktivitas;
            $produktivitas->id_tipe_alat = $request->id_tipe_alat;
            $produktivitas->hasil = round($hasil,3);
            $produktivitas->parameter = json_encode($parameter);
            $produktivitas->save();
            
            return $produktivitas;
        }else if($request->id_jenis_alat[1] == "Dump Truck"){

        }else if($request->id_jenis_alat[1] == "Bulldozer"){

        }else{

        }

        

        return $request;
    }

    public function update(Request $request, $id)
    {
        if($request->id_jenis_alat[1] == "Hydraulic Excavator"){
            $request->validate([
                'hydraulic.waktu_putar' => 'required',
                'hydraulic.kecepatan_putar' => 'required',
                'hydraulic.conversion_factor' => 'required',
                'hydraulic.bucket_fill_factor' => 'required',
                'hydraulic.faktor_kedalaman' => 'required',
                'hydraulic.faktor_efisiensi_kerja' => 'required',
            ]);
            
            $tipeAlat = TipeAlat::where('id',$request->id_tipe_alat)->first();

            $standarCycleTime =$request->hydraulic["waktu_putar"] / $request->hydraulic["kecepatan_putar"];
            
            $cms = $request->hydraulic["conversion_factor"] * round($standarCycleTime,3);

            $hasil = $tipeAlat->kapasitas_bucket * (60/$cms) * $request->hydraulic["faktor_kedalaman"] * $request->hydraulic["bucket_fill_factor"] * $request->hydraulic["faktor_efisiensi_kerja"];
            
            $parameter = [
                'standart_cycle_time' => round($standarCycleTime,3),
                'waktu_putar' => $request->hydraulic["waktu_putar"],
                'kecepatan_putar' => $request->hydraulic["kecepatan_putar"],
                'cms' => $cms,
                'conversion_factor' =>$request->hydraulic["conversion_factor"],
                'kapasitas_bucket' => $tipeAlat->kapasitas_bucket,
                'bucket_fill_factor' => $request->hydraulic["bucket_fill_factor"],
                'faktor_kedalaman' => $request->hydraulic["faktor_kedalaman"],
                'faktor_efisiensi_kerja' => $request->hydraulic["faktor_efisiensi_kerja"]
            ];

            $produktivitas = Produktivitas::find($id);
            $produktivitas->id_tipe_alat = $request->id_tipe_alat;
            $produktivitas->hasil = round($hasil,3);
            $produktivitas->parameter = json_encode($parameter);
            $produktivitas->save();
            
            return $produktivitas;
        }
        // $request->validate([
        //     'parameter' => 'required',
        // ]);

        // return Produktivitas::find($id)->update($request->all());
    }

    public function destroy($id)
    {
       return Produktivitas::find($id)->delete();
    }
}
