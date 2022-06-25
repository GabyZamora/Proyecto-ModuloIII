<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReporteUsuario;


class ReportesUsuario extends Controller
{

    public function usuarios()
    {
        $usuario= new ReporteUsuario();
        $datos['usuarios']= $usuario->orderBy('IdUsuario','ASC')->findAll();

        return view('reportes/usuarioReporte', $datos);
    }


}