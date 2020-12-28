<?php
namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = "tbl_pengguna";
    protected $allowedFields = ['nama','jabatan','golongan'];
    protected $primaryKey = "id";
   
}