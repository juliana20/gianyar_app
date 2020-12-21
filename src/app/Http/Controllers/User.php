<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\User_m;
use Illuminate\Support\Facades\Hash;
use Session;
use Redirect;

class User extends Controller
{

    public function __construct()
    {
        $this->model = new User_m;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){

        $username   = $request->username;
        $password   = $request->password;
        $data       = User_m::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password, $data->password) AND ($data->username == $username)){
                Session::put('username', $data->username);
                Session::put('login',TRUE);

                return redirect('/dashboard');                  
            }   
            else{
                alert()->error('Login gagal, Silahkan cek username, password atau jabatan anda!', 'Perhatian!')->persistent('Tutup');
                return redirect('Login');
            }
        }
        else{
             alert()->error('Login gagal, Silahkan cek username, password atau jabatan anda!', 'Perhatian!')->persistent('Tutup');
            return redirect('Login');
        }
    }
    public function logout(){
        Session::flush();
        alert()->success('Logout berhasil!', 'Sukses!');
        return redirect('Login');
    }

}
