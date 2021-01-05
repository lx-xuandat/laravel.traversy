<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index');

Route::get('/about', 'SiteController@about');
Route::get('/contact', 'SiteController@about');
Route::get('/services', 'SiteController@services');

Route::resource('/post', 'PostController');

/*
- index ; danh sach tat ca cac bai dang - hien thi danh sach resource len view
- ham tao create: dai dien cho bieu mau tao noi dung va sau do no se gui den mot chuc nang duoc goi la store - hien thi bieu mau cho nguoi dung nhap du lieu khi muon tao resource moi
- ham store: dam nhan viec thuc su gui no den model csdl - luu resource duoc gui tu form create vao storage
- edit: bieu mau chinh sua sau do gui du lieu den update - tao bieu mau de nguoi dung co the cap nhap noi dung cua resource duoc chi dinh
- update: cap nhat du lieu - cap nhat resource duoc chi dinh vao storage
- destroy: xoa ban ghi - Xóa resource đã chỉ định khỏi storage
- show: hien thi 1 du lieu ban ghi (khong cho phep cap nhat, chinh sua)
*/
