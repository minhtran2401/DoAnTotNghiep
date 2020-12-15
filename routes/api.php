<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function(Request $request){
    return response()->json(['Get api GF' => 'success', 'TranNhatMinh' => 'Welcome'], 200);
})->name('api.index');
Route::get('/thong-ke-san-pham', [App\Http\Controllers\ChartController::class, 'thong_ke_san_pham'])->name('api.thong_ke_san_pham');
Route::get('/thong-ke-so-luong-san-pham', [App\Http\Controllers\ChartController::class, 'thong_ke_so_luong_san_pham'])->name('api.thong_ke_so_luong_san_pham');
Route::get('/thong-ke-don-hang', [App\Http\Controllers\ChartController::class, 'thong_ke_don_hang'])->name('api.thong_ke_don_hang');
Route::get('/thong-ke-thu-nhap', [App\Http\Controllers\ChartController::class, 'thong_ke_thu_nhap'])->name('api.thong_ke_thu_nhap');
Route::get('/san-pham-ban-chay', [App\Http\Controllers\ChartController::class, 'san_pham_ban_chay'])->name('api.san_pham_ban_chay');
Route::get('/khach-hang-tiem-nang', [App\Http\Controllers\ChartController::class, 'khach_hang_tiem_nang'])->name('api.khach_hang_tiem_nang');

Route::get('/status-web', [App\Http\Controllers\PageController::class, 'status_web'])->name('api.status_web');





