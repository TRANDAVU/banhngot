<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\admin\levelController;
use App\Http\Controllers\admin\permisionController;
use App\Http\Controllers\admin\adminProductcontroller;
use App\Http\Controllers\admin\adminChiTietDanhMucController;
use App\Http\Controllers\admin\adminDanhMucController;
use App\Http\Controllers\dreamCakeController;;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('upFile', [dreamCakeController::class, 'upFile'])->name('admin.dreamCakeController.upFile');
Route::get('upFile', [dreamCakeController::class, 'upload-image'])->name('admin.dreamCakeController.upload_image');
Route::get('upFile', [dreamCakeController::class, 'upload-video'])->name('admin.dreamCakeController.upload_video');
Route::get('dowloadDocument', [dreamCakeController::class, 'dowload_document'])->name('admin.dreamCakeController.dowloadDocument');
Route::get('readDocument', [dreamCakeController::class, 'read_document'])->name('admin.dreamCakeController.readDocument');
Route::get('deleteDocument', [dreamCakeController::class, 'delete_document'])->name('admin.dreamCakeController.deleteDocument');
Route::get('listDocument', [dreamCakeController::class, 'list_document'])->name('admin.dreamCakeController.listDocument');
Route::get('newFoler', [dreamCakeController::class, 'newFoler'])->name('admin.dreamCakeController.newFoler');
Route::get('renameFoler', [dreamCakeController::class, 'renameFoler'])->name('admin.dreamCakeController.renameFoler');
Route::get('deleteFoler', [dreamCakeController::class, 'deleteFoler'])->name('admin.dreamCakeController.deleteFoler');


Route::group(['prefix' => 'admin'], function () {
    Route::get('index', [adminController::class, 'getindex'])->name('admin.adminController.index');

    Route::get('index-users', [userController::class, 'getindex'])->name('admin.userController.index');
    Route::get('edit-user/{slug}', [userController::class, 'getEdit'])->name('admin.userController.edit');
    Route::post('edit-user/{slug}', [userController::class, 'postEdit'])->name('admin.userController.postEdit');
    Route::get('delete-user/{slug}', [userController::class, 'getDelete'])->name('admin.userController.getDelete');

    Route::get('index-level', [levelController::class, 'getindex'])->name('admin.levelController.index');
    Route::get('edit-level/{slug}', [levelController::class, 'getEdit'])->name('admin.levelController.edit');
    Route::post('edit-level/{slug}', [levelController::class, 'postEdit'])->name('admin.levelController.postEdit');
    Route::get('delete-level/{slug}', [levelController::class, 'getDelete'])->name('admin.levelController.getDelete');

    Route::get('index-permision', [permisionController::class, 'getindex'])->name('admin.permisionController.index');
    Route::get('edit-permision/{slug}', [permisionController::class, 'getEdit'])->name('admin.permisionController.edit');
    Route::post('edit-permision/{slug}', [permisionController::class, 'postEdit'])->name('admin.permisionController.postEdit');
    Route::get('delete-permision/{slug}', [permisionController::class, 'getDelete'])->name('admin.permisionController.getDelete');

    Route::get('index-products', [adminProductcontroller::class, 'getindex'])->name('admin.adminProductcontroller.index');
    Route::get('chang-products', [adminProductcontroller::class, 'getChang'])->name('admin.adminProductcontroller.chang');
    Route::post('chang-products', [adminProductcontroller::class, 'postChang'])->name('admin.adminProductcontroller.postChang');
    Route::get('edit-products/{slug}', [adminProductcontroller::class, 'getEdit'])->name('admin.adminProductcontroller.edit');
    Route::post('edit-products/{slug}', [adminProductcontroller::class, 'postEdit'])->name('admin.adminProductcontroller.postEdit');
    Route::get('delete-products/{slug}', [adminProductcontroller::class, 'getDelete'])->name('admin.adminProductcontroller.getDelete');

    Route::get('index-CTDM', [adminChiTietDanhMucController::class, 'getindex'])->name('admin.adminChiTietDanhMucController.index');
    Route::get('chang-CTDM', [adminChiTietDanhMucController::class, 'getChang'])->name('admin.adminChiTietDanhMucController.chang');
    Route::post('chang-CTDM', [adminChiTietDanhMucController::class, 'postChang'])->name('admin.adminChiTietDanhMucController.postChang');
    Route::get('edit-CTDM/{slug}', [adminChiTietDanhMucController::class, 'getEdit'])->name('admin.adminChiTietDanhMucController.edit');
    Route::post('edit-CTDM/{slug}', [adminChiTietDanhMucController::class, 'postEdit'])->name('admin.adminChiTietDanhMucController.postEdit');
    Route::get('delete-CTDM/{slug}', [adminChiTietDanhMucController::class, 'getDelete'])->name('admin.adminChiTietDanhMucController.getDelete');

    Route::get('index-DM', [adminDanhMucController::class, 'getindex'])->name('admin.adminDanhMucController.index');
    Route::get('chang-DM', [adminDanhMucController::class, 'getChang'])->name('admin.adminDanhMucController.chang');
    Route::post('chang-DM', [adminDanhMucController::class, 'postChang'])->name('admin.adminDanhMucController.postChang');
    Route::get('edit-DM/{slug}', [adminDanhMucController::class, 'getEdit'])->name('admin.adminDanhMucController.edit');
    Route::post('edit-DM/{slug}', [adminDanhMucController::class, 'postEdit'])->name('admin.adminDanhMucController.postEdit');
    Route::get('delete-DM/{slug}', [adminDanhMucController::class, 'getDelete'])->name('admin.adminDanhMucController.getDelete');
});