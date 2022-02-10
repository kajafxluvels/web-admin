<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $allowedFields = ['Nama','Jabatan','Email','Username','Password'];

}