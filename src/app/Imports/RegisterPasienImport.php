<?php

namespace App\Imports;

use App\ModelRegisterPasien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegisterPasienImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelRegisterPasien([
            'no_reg' => $row['no_reg'],
            'nama_pasien' => $row['nama_pasien'],
            'nrm' => $row['nrm'],
            'tipe_perawatan' => $row['tipe_perawatan'],
            'jenis_kelamin' => $row['jenis_kelamin'], 
            'tipe_pasien' => $row['tipe_pasien'],
            'nama_customer' => $row['nama_customer'],
            'pekerjaan' => $row['pekerjaan'],
            'pendidikan' => $row['pendidikan'], 
            'usia' => $row['usia'],
            'agama' => $row['agama'],
            'alamat' => $row['alamat'],
            'desa' => $row['desa'],
            'kecamatan' => $row['kecamatan'], 
            'kabupaten' => $row['kabupaten'],
            'diagnosa' => $row['diagnosa'],
            'dokter' => $row['dokter'],
            'status' => $row='1',
        ]);
    }
}
