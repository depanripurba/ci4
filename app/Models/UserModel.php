<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "autuser";
    protected $allowedFields = ['email','password','namadepan','namabelakang'];
    protected $primaryKey = "id";
   
}