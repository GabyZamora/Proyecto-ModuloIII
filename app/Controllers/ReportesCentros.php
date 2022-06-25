<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReporteCentro;


class ReportesCentros extends Controller
{

    public function centros()
    {
        $Centro = new ReporteCentro();
        $datos['centros']=$Centro->orderBy('IdCentro', 'ASC')->findAll();
        return view('reportes/centrosReporte',$datos);
    }
}