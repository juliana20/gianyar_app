<?php

namespace App\Http\Controllers;
use App\Http\Model\Penerima_bantuan_m;
use Illuminate\Http\Request;
use App\Http\Model\Jenis_bantuan_m;
use Session;
use Response;
use DB;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->model_jenis_bantuan = new Jenis_bantuan_m;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'jenis_bantuan' => $this->model_jenis_bantuan->get_all()
        ];
        return view('dashboard.dashboard', $data);
    }

    public function chart(Request $request)
    {
    }

    
}
