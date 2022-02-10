<?php

namespace App\Controllers;

use App\Models\absensi_model;

class Primary extends BaseController
{
    public function home()
    {
        return view('admin-dasboard/index');
    }
    public function tables()
    {
        $absensimodel = new absensi_model();

        $listabsen = $absensimodel->findAll();
        $data = [
            'absensi' => $listabsen
        ];

        return view('admin-dasboard/tables', $data);
    }
    public function rekap_absen()
    {
        $absensimodel = new absensi_model();
        $bulan = $this->request->getPost('month');

        $rekapabsen = $absensimodel->where('MONTHNAME(tanggal)',$bulan)->first();

        $data = [
            'rekap_absensi' => $rekapabsen
        ];
        dd($data);

        //return view('admin-dasboard/tabelrekap', $bulan);
    }
}
