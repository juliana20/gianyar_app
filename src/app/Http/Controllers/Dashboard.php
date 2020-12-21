<?php

namespace App\Http\Controllers;
use App\Http\Model\Pemasukan_m;
use App\Http\Model\User_m;
use App\Http\Model\Pengeluaran_m;
use App\Http\Model\Akun_m;
use Illuminate\Http\Request;
use Session;
use Response;
use DB;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            alert()->error('Anda belum login, silahkan login terlebih dahulu!', 'Perhatian!')->persistent('OK');
            return redirect('Login');
        }
        else
        {
            $data = [
                'pemasukan' => DB::table('tb_pemasukan as a')
                                ->select(DB::raw('sum(a.total) as total'))
                                ->first(),
                'pengeluaran' => DB::table('tb_pengeluaran as a')
                                ->select(DB::raw('sum(a.total) as total'))
                                ->first(),
            ];

            return view('dashboard.dashboard', $data);
        }
    }

    public function chart(Request $request)
    {
        $params = $request->post('header');
        $pemasukan = DB::table('tb_pemasukan as a')
                    ->select(DB::raw('sum(a.total) as total'), DB::raw('MONTH(a.tanggal) month'))
                    ->groupby('month')
                    ->where(DB::raw('YEAR(a.tanggal)'),$params['year'])
                    ->get();

        $pengeluaran = DB::table('tb_pengeluaran as a')
                    ->select(DB::raw('sum(a.total) as total'), DB::raw('MONTH(a.tanggal) month'))
                    ->groupby('month')
                    ->where(DB::raw('YEAR(a.tanggal)'),$params['year'])
                    ->get();

        $months = (object) array(
            ['id' => 1,'bulan' => 'Jan.'], 
            ['id' => 2,'bulan' => 'Feb.'], 
            ['id' => 3,'bulan' => 'Mar.'], 
            ['id' => 4,'bulan' => 'Apr.'], 
            ['id' => 5,'bulan' => 'May.'], 
            ['id' => 6,'bulan' => 'Jun.'], 
            ['id' => 7,'bulan' => 'Jul.'], 
            ['id' => 8,'bulan' => 'Aug.'], 
            ['id' => 9,'bulan' => 'Sep.'], 
            ['id' => 10,'bulan' => 'Oct.'], 
            ['id' => 11,'bulan' => 'Nov.'], 
            ['id' => 12,'bulan' => 'Dec.'], 
        );

        foreach($months as $bln):
                foreach($pemasukan as $pmb):
                    foreach($pengeluaran as $pnj):
                        if($bln['id'] == $pmb->month && $bln['id'] == $pnj->month):

                            $dataGrafik = [
                                'Bulan' => $bln['bulan'],
                                'Pemasukan' => $pmb->total,
                                'Pengeluaran' => $pnj->total
                            ];

                            $grafik[] = $dataGrafik;
                        endif;
                    endforeach;
            endforeach;
        endforeach;

        if(!empty($grafik)):
            $response = array(
                "data" => $grafik,
                "status" => "success",
                "message" => 'Grafik',
                "code" => "200",
            );
        else:
            foreach($months as $bln):
                            $dataGrafikEmpty = [
                                'Bulan' => $bln['bulan'],
                                'Pemasukan' => 0,
                                'Pengeluaran' => 0
                            ];

                            $grafikEmpty[] = $dataGrafikEmpty;
            endforeach;

            $response = array(
                "data" => $grafikEmpty,
                "status" => "success",
                "message" => 'Grafif',
                "code" => "200",
            );
        endif;
        return Response::json($response);
    }

    
}
