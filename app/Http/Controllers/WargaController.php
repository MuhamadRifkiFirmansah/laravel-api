<?php

namespace App\Http\Controllers;

use App\Http\Resources\WargaResourceCollection;
use App\Http\Resources\WargaResource;
use Illuminate\Http\Request;
use App\Warga;

class WargaController extends Controller
{
    public function index() : WargaResourceCollection
    {
        $data = Warga::all();
        return new WargaResourceCollection($data);
    }

    public function show(Warga $warga) : WargaResource
    {
        return new WargaResource($warga);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
            'nomor_telepon' => 'required',
            'rukun_tetangga' => 'required',
            'rukun_warga' => 'required',
        ]);

        $data = $request->all();
        $warga = Warga::create($data);

        return new WargaResource($warga);
    }

    public function update(Request $request,Warga $warga) : WargaResource
    {
        $data = $request->all();
        $warga->update($data);

        // var_dump($warga);

        return new WargaResource($warga);
    }

    public function destroy(Warga $warga)
    {
        $warga->delete();

        return response()->json(200);
    }


}
