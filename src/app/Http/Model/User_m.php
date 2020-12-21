<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User_m extends Model
{
	protected $table = 'user';
	protected $index_key = 'username';
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
