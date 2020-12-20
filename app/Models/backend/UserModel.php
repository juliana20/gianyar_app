<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    public $timestamps  = false;

    function get_all()
    {
        return self::all();
    }

}
