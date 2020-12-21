<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Akun_m;
use Illuminate\Support\Facades\Hash;
use Session;
use Redirect;
use DataTables;
use Response;


class Akun extends Controller
{
    protected $model;

    protected $kategori_akun = [
        ['id' => 'Aktiva Tetap', 'desc' => 'Aktiva Tetap'],
        ['id' => 'Aktiva Lancar', 'desc' => 'Aktiva Lancar'],
        ['id' => 'Kewajiban', 'desc' => 'Kewajiban'],
        ['id' => 'Modal', 'desc' => 'Modal'],
        ['id' => 'Pendapatan', 'desc' => 'Pendapatan'],
        ['id' => 'Beban Usaha', 'desc' => 'Beban Usaha'],
        ['id' => 'Beban Lainnya', 'desc' => 'Beban Lainnya'],
        ['id' => 'Kas', 'desc' => 'Kas'],
        ['id' => 'Prive', 'desc' => 'Prive'],
    ];

    public function __construct(Akun_m $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(){
    if(!Session::get('login')){
        alert()->error('Anda belum login, silahkan login terlebih dahulu!', 'Perhatian!')->persistent('OK');
        return redirect('Login');
    }
    else
    {
            $item = [
                'no_akun'       => null,
                'nama_akun'     => null,
                'kategori'      => null,
                'debet'         => 0,
                'kredit'        => 0,
                'saldo'         => 0,
                'aktif'         => 1,
            ];

            $data = array(
                'item'              => (object) $item,
                'kategori_akun'     => $this->kategori_akun,
                'title'             => 'Data Akun |',
                'header'            => 'LIST DATA AKUN',
                'headerModalTambah' => 'FORM TAMBAH DATA AKUN',
                'headerModalEdit'   => 'FORM UBAH DATA AKUN',
                'headerModalHapus'  => 'KONFIRMASI HAPUS DATA AKUN',
                'idModalTambah'     => 'modalTambah',
                'idModalEdit'       => 'modalEdit',
                'idLoadEdit'        => 'loadEdit',
                'idDataTable'       => 'datatables-akun',
                'idModalHapus'      => 'modalHapus',
                'url_datatables'    => 'datatables-akun',
                'submit_url'        =>  url()->current(),
                'is_edit'           => FALSE,
                
            );
            return view('akun.datatable',$data);
        }
    }

    public function datatables_collection()
    {
        $data = $this->model->get_all();
        return Datatables::of($data)->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $header = $request->input('f');
        $cekNoAkun = $this->model->get_by(['no_akun' => $header['no_akun']]);
        if(!empty($cekNoAkun))
        {
            alert()->warning('Item data gagal dibuat! no akun yang sama sudah ada pada list', 'Perhatian!')->persistent('OK');
            return redirect('akun'); 
        }

        $cekNamaAkun = $this->model->get_by(['nama_akun' => $header['nama_akun']]);
        if(!empty($cekNamaAkun))
        {
            alert()->warning('Item data gagal dibuat! nama akun yang sama sudah ada pada list', 'Perhatian!')->persistent('OK');
            return redirect('akun'); 
        }

        $insert = $this->model->insert_data($header);

        if($insert)
            {
                alert()->success('Item data baru berhasil dibuat!', 'Sukses!'); 
            }
            else
            {
                alert()->warning('Item data gagal dibuat!', 'Perhatian!')->persistent('OK');
            }
        return redirect('akun');  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data = [
            'item'              => $this->model->get_one($id),
            'is_edit'           => TRUE,
            'submit_url'        => url()->current(),
            'kategori_akun'     => $this->kategori_akun,
        ];

        //jika form sumbit
        if($request->post())
        {
            $header = $request->input('f');

            $cekNoAkun = $this->model->get_by(['no_akun' => $header['no_akun']]);
            if(!empty($cekNoAkun) && ($header['no_akun'] != $data['item']->no_akun))
            {
                alert()->warning('Item data gagal dibuat! no akun yang sama sudah ada pada list', 'Perhatian!')->persistent('OK');
                return redirect('akun'); 
            }
    
            $cekNamaAkun = $this->model->get_by(['nama_akun' => $header['nama_akun']]);
            if(!empty($cekNamaAkun) && ($header['nama_akun'] != $data['item']->nama_akun))
            {
                alert()->warning('Item data gagal dibuat! nama akun yang sama sudah ada pada list', 'Perhatian!')->persistent('OK');
                return redirect('akun'); 
            }
    

            if(empty($header['aktif'])){
                $header['aktif'] = 0;
            }else{
                $header['aktif'] = 1;
            }
            
            
            $insert = $this->model->update_data($header, $id);

            if($insert)
            {
                alert()->success('Data akun berhasil diperbarui!', 'Sukses!');
            }
            else
            {
                alert()->warning('Data akun gagal diperbarui!', 'Perhatian!')->persistent('OK');
            }
            return redirect('akun');    
        }
        
        return view('akun.form', $data);
    }


}
