<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;

class WargaControllerWeb extends Controller
{
    public function index()
    {
        $data['warga'] = Warga::all();
        return view('welcome',$data);
    }
}
