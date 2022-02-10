<?php

namespace App\Models;

use CodeIgniter\Model;

class Pegawai_model extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'NIP';
    protected $allowedFields = ['NIP','Nama','Jabatan','No_tlp','Username'];

}