<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// 

// RUOTE DIPAKAI =============================================================================================================
Route::get('/',function(){
	return view('auth.login');
});

Route::resource('/dashboard','Dashboard');

Route::resource('/user','User');
Route::post('/user/store','User@store');
Route::post('/user/{id}/edit','User@edit');

Route::resource('/penerima_bantuan','PenerimaBantuan');
Route::post('/penerima_bantaun/store','PenerimaBantuan@store');
Route::post('/penerima_bantaun/{id}/edit','PenerimaBantuan@edit');

//DATATABLES COLLECTIONS
Route::get('/datatables-user','User@datatables_collection')->name('user.datatables-collection');
Route::get('/datatables-penerima-bantuan','PenerimaBantuan@datatables_collection')->name('penerima_bantuan.datatables-collection');


Route::get('/Login','User@login');
Route::post('/LoginPost','User@loginPost');
Route::get('/Logout', 'User@logout');
Route::get('/Akun/{id}','User@akun');
Route::put('/EditAkun/{id}','User@editAkun');


Route::post('/dashboard/chart','Dashboard@chart');








// =========================================================================================================================

?>