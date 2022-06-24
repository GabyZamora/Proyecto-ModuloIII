<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReporteUsuario;
use App\Models\ReporteDispo;
use App\Models\ReporteCentro;
use App\Models\ReporteIncidente;


class Reportes extends Controller
{

    public function usuarios()
    {
        $usuario= new ReporteUsuario();
        $datos['usuarios']= $usuario->orderBy('IdUsuario','ASC')->findAll();

        return view('reportes/usuarioReporte', $datos);
    }

   

    public function dispositivos()
    {
        $dispositivo= new ReporteDispo();
        $datos['dispositivos']= $dispositivo->orderBy('IdDispositivo','ASC')->findAll();

        return view('reportes/dispositivosReporte', $datos);
    }

    public function centros()
    {
     
        $Centro = new ReporteCentro();
        $datos['centros']=$Centro->orderBy('IdCentro', 'ASC')->findAll();
        return view('reportes/centrosReporte',$datos);
    }
    
    public function incidentes()
    {
        $Incidente = new ReporteIncidente();
        $datos['incidentes']=$Incidente->orderBy('IdIncidente', 'ASC')->findAll();

        return view('reportes/incidentesReporte',$datos);
    }

}