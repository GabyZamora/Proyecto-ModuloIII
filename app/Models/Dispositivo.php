<?php 
namespace App\Models;

use CodeIgniter\Model;

class Dispositivo extends Model{
    protected $table = 'dispositivoxc';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdDispositivo';
    protected $allowedFields = ['IdCentro', 'IdDispositivo'];
}