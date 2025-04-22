<?php 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\AnggotaController; 
 
Route::get('/', [AnggotaController::class, 'index']); 
 
Route::resource('anggota', AnggotaController::class);