<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Penerima_bantuan_m extends Model
{
	protected $table = 'penerima_bantuan';
	protected $index_key = 'id';
    public $timestamps  = false;

    function get_all()
    {
        return self::get();
	}
	
	function get_collection()
    {
		$query = DB::table('penerima_bantuan as a')
				->leftjoin('kecamatan as b','a.kecamatan_id','=','b.id')
				->join('desa as c', function($join){
					$join->on('a.desa_id','=','c.desa_id');
					$join->on('a.kecamatan_id','=','c.desa_kecamatan_id');
				})
				->leftjoin('jenis_bantuan as d','a.jenis_bantuan_id','=','d.id')
				->select('a.*','b.nama as kecamatan','c.desa_nama as desa','d.nama as jenis_bantuan')
				->get();
		return $query;
	}
	
	function get_one_collection( $id )
    {
		$query = DB::table('penerima_bantuan as a')
				->leftjoin('kecamatan as b','a.kecamatan_id','=','b.id')
				->join('desa as c', function($join){
					$join->on('a.desa_id','=','c.desa_id');
					$join->on('a.kecamatan_id','=','c.desa_kecamatan_id');
				})
				->leftjoin('jenis_bantuan as d','a.jenis_bantuan_id','=','d.id')
				->select('a.*','b.nama as kecamatan','c.desa_nama as desa','d.nama as jenis_bantuan')
				->where('a.id', $id)
				->first();
		return $query;
    }

    function insert_data($data)
	{
		return self::insert($data);
	}

	function get_one($id)
	{
		return self::where($this->index_key,$id)->first();
	}

	function update_data($data, $id)
	{
		return self::where($this->index_key,$id)->update($data);
	}
}
