<?php

namespace App\Controllers;

use App\Models\absensi_model;
use App\Models\User_model;
use Dompdf\Dompdf;

class Primary extends BaseController
{
    public function home()
    {
        $session = session();
        return view('admin-dasboard/halamanutama');
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
        
            $rekapabsen = $absensimodel->findAll();
            $data = [
                'rekap_absensi' => $rekapabsen
            ];
            $dompdf = new Dompdf();
            $dompdf->loadHtml(view('admin-dasboard/tabelrekap',$data));
            $dompdf->setPaper('A4','portrait');
            $dompdf->render();
            $dompdf->stream('Daftar Absensi');

            return redirect()->to(base_url('admin-dasboard/tabel'));

    }
    public function jumlahabsen()
    {
        $absensimodel = new absensi_model();
        $result = $absensimodel->select('sum(NIP) as jml')->first();
        $data['sum'] = $result['jml'];
        
        return view('admin-dasboard/halamanutama', $data);
    }
}
