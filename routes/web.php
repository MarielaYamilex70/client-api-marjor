<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClientsController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    //return view('welcome');
    //dd('Guzzle HTTP client');
    //echo 'Guzzle HTTP client';
    $response = Http::get('http://127.0.0.1:8000/api/clients');
    $data = $response->json();
    //dd($data);
    foreach( $data as $client){
        echo  $client['name'].'-'.$client['email'];
        echo '<br>';

    } 
});*/

Route::get('/',[ClientsController::class,'index'])->name('client.index');
Route::get('/client',[ClientsController::class,'create']);
Route::post('/client',[ClientsController::class,'store'])->name('client.store');
Route::get('/client/{id}',[ClientsController::class,'edit'])->name('client.edit');
Route::post('/client/update',[ClientsController::class,'update'])->name('client.update');
Route::get('/client/delete{id}',[ClientsController::class,'destroy'])->name('client.destroy');
