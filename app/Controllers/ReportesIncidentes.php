<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReporteIncidente;


class ReportesIncidentes extends Controller
{
    public function incidentes()
    {
        $Incidente = new ReporteIncidente();
        $datos['incidentes']=$Incidente->orderBy('IdIncidente', 'ASC')->findAll();

        return view('reportes/incidentesReporte',$datos);
    }
}