<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Penerima_bantuan_m extends Model
{
	protected $table = 'penerima_bantuan';
	protected $index_key = 'id';
    public $timestamps  = false;

    function get_all()
    {
        return self::get();
    }

    function insert_data($data)
	{
		return self::insert($data);
	}

	function get_one($id)
	{
		return self::where($this->index_key,$id)->first();
	}

	function update_data($data,$id)
	{
		return self::where($this->index_key,$id)->update($data);
	}
}
