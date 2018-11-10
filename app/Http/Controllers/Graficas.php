<?php

namespace App\Http\Controllers;

//use ConsoleTVs\Charts\Charts;


use ConsoleTVs\Charts\Classes\C3\Chart;
use DemeterChain\C;
use Illuminate\Http\Request;

use App\Apellidosmun;
use App\Apellidosreg;
use App\Sinapellidosmun;
use App\Sinapellidosreg;

class Graficas extends Controller
{
    public function index(){
        return 'hola';

    }

    public function apMun(){
        return response()->json(Apellidosmun::all());
    }

    public function apReg(){
        return response()->json(Apellidosreg::all());
    }

    public function sinapMun(){
        return response()->json(Sinapellidosmun::all());
    }

    public function sinapReg(){
        return response()->json(Sinapellidosreg::all());
    }

    public function apellidosMun(){
        return view('graficas.apellidosMun');
    }

    public function apellidosReg(){
        return view('graficas.apellidosReg');

    }

    public function sinApellidosMun(){
        return view('graficas.sinapellidosMun');
    }

    public function sinApellidosReg(){
        return view('graficas.sinapellidosReg');
    }
}
