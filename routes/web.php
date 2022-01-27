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

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JCBcontroller;
use App\Http\Controllers\MPUcontroller;
use App\Http\Controllers\onecardController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\VisaDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"home"])->name("home");

Route::get('/JCB', [HomeController::class,"JCBHome"])->name("JCBHome");
Route::get('/MPU', [HomeController::class,"MPUHome"])->name("MPUHome");

Route::post('/jcbupload', [JCBcontroller::class,"jcb"])->name("jcb");
Route::get('/jcbdownload', [JCBcontroller::class,"download"])->name("download");

Route::post('/mpuupload', [MPUcontroller::class,"mpu"])->name("mpu");

//Download Button//
//11C
Route::get('/IND11Cdownload', [DownloadController::class,"downloadIND11c"])->name("downloadIND11c");
//ACOM
Route::get('/ACOMdownload', [DownloadController::class,"downloadACOM"])->name("downloadACOM");
//ICOM
Route::get('/ICOMdownload', [DownloadController::class,"downloadICOM"])->name("downloadICOM");
//11S
Route::get('/inc11sdownload', [DownloadController::class,"downloadinc11s"])->name("downloadinc11s");
//11s_901
Route::get('/inc11s_901download', [DownloadController::class,"downloadinc11s_901"])->name("downloadinc11s_901");
//SCOM
Route::get('/SCOMdownload', [DownloadController::class,"downloadincSCOM"])->name("downloadincSCOM");
//SCOM_901902
Route::get('/SCOM_901902download', [DownloadController::class,"downloadincSCOM_901902"])->name("downloadincSCOM_901902");
//AERR
Route::get('/AERRdownload', [DownloadController::class,"downloadAerr"])->name("downloadAerr");
//INC11E
Route::get('/INC11Edownload', [DownloadController::class,"downlodINC11E"])->name("downlodINC11E");
//IERR
Route::get('/IERRdownload', [DownloadController::class,"downlodIERR"])->name("downlodIERR");
//01C
Route::get('/downlod01C', [DownloadController::class,"downlod01C"])->name("downlod01C");
//01S_900
Route::get('/downlodijc01_900', [DownloadController::class,"downlodijc01_900"])->name("downlodijc01_900");
//01S_902
Route::get('/downlodijc01_902', [DownloadController::class,"downlodijc01_902"])->name("downlodijc01_902");
//INC_01C
Route::get('/downlodinc01c', [DownloadController::class,"downlodinc01c"])->name("downlodinc01c");


Route::get('/pdf', [PdfController::class,"pdf"])->name("pdf");

//Visa Data Record
Route::get('/visa', [VisaDataController::class,"visa"])->name("visa");
Route::post('/visa', [VisaDataController::class,"insert"])->name("insert");
Route::get('/visaall', [VisaDataController::class,"show"])->name("showall");

Route::get('/ccy', [VisaDataController::class,"ccy"])->name("ccy");
Route::post('/ccy', [VisaDataController::class,"ccyinsert"])->name("ccyinsert");

//Onecard
Route::get('/cz', [onecardController::class,"card"])->name("card");
