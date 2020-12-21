<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Penerima_bantuan_m;
use App\Http\Model\Kecamatan_m;
use App\Http\Model\Desa_m;
use App\Http\Model\Jenis_bantuan_m;
use Illuminate\Support\Facades\Hash;
use Session;
use Redirect;
use DataTables;

class PenerimaBantuan extends Controller
{
    public function __construct()
    {
        $this->model = new Penerima_bantuan_m;
        $this->model_kecamatan = new Kecamatan_m;
        $this->model_desa = new Desa_m;
        $this->model_jenis_bantuan = nsew Jenis_bantuan_m;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
            $item = [
                'alamat'          => null,
                'desa_id'       => null,
                'kecamatan_id'      => null,
                'nama_penerima'      => null,
                'nomor_ktp'      => null,
                'nomor_kk'      => null,
                'jenis_bantuan_id'      => null,
                'lintang'      => null,
                'bujur'      => null,
                'keterangan'      => null,
            ];

            $data = array(
                'item'              => (object) $item,
                'kecamatan'         => $this->model_kecamatan->get_all(),
                'desa'              => $this->model_desa->get_all(),
                'jenis_bantuan'     => $this->model_jenis_bantuan->get_all(),
                'title'             => 'Data Penerima Bantuan |',
                'header'            => 'LIST DATA PENERIMA BANTUAN',
                'headerModalTambah' => 'FORM TAMBAH DATA PENERIMA BANTUAN',
                'headerModalEdit'   => 'FORM UBAH DATA PENERIMA BANTUAN',
                'headerModalHapus'  => 'KONFIRMASI HAPUS DATA PENERIMA BANTUAN',
                'idModalTambah'     => 'modalTambahpPenerimaBantuan',
                'idModalEdit'       => 'modalEditPenerimaBantuan',
                'idLoadEdit'        => 'loadEditPenerimaBantuan',
                'idDataTable'       => 'dataPenerimaBantuan',
                'idModalHapus'      => 'modalHapusPenerimaBantuan',
                'url_datatables'    => 'datatables-penerima-bantuan',
                'submit_url'        =>  url()->current(),
                'is_edit'           => FALSE,
            );
            return view('penerima_bantuan.datatable',$data);
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
        $item = $request->input('f');
        $this->model->insert_data($item);
        alert()->success('Data penerima bantuan berhasil ditambah!', 'Sukses!');
        return redirect('penerima_bantuan');    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = [
            'item'       => $this->model->get_one($id),
            'is_edit'    => TRUE,
            'submit_url' => url()->current()
        ];

        //jika form sumbit
        if($request->post())
        {
            $item = $request->input('f');
            $insert = $this->model->update_data($item, $id);

            if($insert)
            {
                alert()->success('Data penerima bantuan berhasil diperbarui!', 'Sukses!');
            }
            else
            {
                alert()->warning('Data penerima bantuan gagal diperbarui!', 'Perhatian!')->persistent('OK');
            }
            return redirect('penerima_bantuan');    
        }
        
        return view('penerima_bantuan.form', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item = $this->model->get_one($id);
        return view('penerima_bantuan.delete', compact('item'));
    }
    public function destroy(Request $request, $id)
    {
        $data =[
            'status'    => 'Tidak Aktif'
        ];
        $this->model->update_data($data,$id);
        alert()->success('Data penerima bantuan berhasil dihapus!', 'Sukses!');
        return Redirect::back(); 
    }

}
