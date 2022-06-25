<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReporteDispo;


class ReportesDispo extends Controller
{

    public function dispositivos()
    {
        $dispositivo= new ReporteDispo();
        $datos['dispositivos']= $dispositivo->orderBy('IdDispositivo','ASC')->findAll();

        return view('reportes/dispositivosReporte', $datos);
    }
}