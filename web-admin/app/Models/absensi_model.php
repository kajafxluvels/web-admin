<?php

namespace App\Models;

use CodeIgniter\Model;

class Absensi_model extends Model
{
    protected $table = 'absensi';
    protected $primaryKey = 'ID_absen';
    protected $allowedFields = ['NIP','tanggal','fotomasuk','fotokeluar','jammasuk','jamkeluar',
                                'latitudemasuk','longitudemasuk','latitudekeluar','longitudekeluar'];

}