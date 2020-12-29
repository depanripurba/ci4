<?php
namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = "autuser";
    protected $allowedFields = ['email','password'];
    protected $primaryKey = "id";
   
}