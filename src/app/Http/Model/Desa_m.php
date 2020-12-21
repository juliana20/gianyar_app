<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Desa_m extends Model
{
	protected $table = 'desa';
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
