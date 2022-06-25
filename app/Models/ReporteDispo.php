<?php 
namespace App\Models;

use CodeIgniter\Model;

class ReporteDispo extends Model{
    protected $table = 'dispositivos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdDispositivo';
    protected $allowedFields = ['nombreDispositivo', 'descripcionDispositivo', 'marcaDispositivo', 'modeloDispositivo', 'fechaIngreso', 'fechaModificacion'];
}