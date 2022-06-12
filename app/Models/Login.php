<?php 
namespace App\Models;
use CodeIgniter\Model;

class Login extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'IdUsuario';
    protected $allowedFields = ['NombreUsuario','Usuario','PASSWORD'];
}