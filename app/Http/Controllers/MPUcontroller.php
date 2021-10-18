<?php

namespace App\Http\Controllers;

use App\Exports\acomExport;
use App\Exports\icomExport;
use App\Exports\Inc11eExport;
use App\Exports\AerrExport;
use App\Exports\ierrExport;
use App\Exports\ijc01_900sExport;
use App\Exports\ijc01_902sExport;
use App\Exports\ijc01cExport;
use App\Exports\inc11sExport;
use App\Exports\inc901Export;
use App\Exports\incExport;
use App\Exports\ind11cExport;
use App\Exports\indcExport;
use App\Exports\scom901902Export;
use App\Exports\scomExport;
use App\Models\acom;
use App\Models\aerr;
use App\Models\ierr;
use App\Models\inc11e;
use App\Models\icom;
use App\Models\ii_inc;
use App\Models\ii_scom;
use App\Models\ijc01_900;
use App\Models\ijc01_902;
use App\Models\ijc01c;
use App\Models\inc;
use App\Models\inc01c;
use App\Models\inc11s;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ind11c;
use App\Models\scom;
use Illuminate\Support\Facades\DB;

class MPUcontroller extends Controller
{
    public function mpu()
    {
        $validation=request()->validate([
            "mpu"=>"required|mimes:txt",
        ]);
        $name=request('mpu');
        $filename=$name->getClientoriginalName();
        $e=substr($filename, 0, 3); //IJC
        $a=substr($filename, 9); //(MPU=>11C,11E and 11S) (JCBNewSwitch=>01C and 01S)
        $b=substr($filename, 11); //ACOM,AERR,SCOM and ICOM
        $c=substr($filename, 16); //SCOM_901902
        $d=substr($filename, 13); //11S_901
        $f=substr($filename, 9); //(MPU=>01S,01S_902,01C,01X)



        // 11C
        if ($e=='INC' && $a==='11C') {
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/11C/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from ind11cs');
                    foreach ($data as $row) {
                        ind11c::Create([
                                'Field1'=>$row [0],
                                'filename'=>$filename,
                            ]);
                    };
                }
                $data=new ind11c();
                return view('NewSwitch/MPU/ind11c', [
                        'ind11c' => $data->ind11c(),
                        'filename'=>$filename,
                    ]);
            };
        } elseif ($e=='INC' && $f==='01C'|| $e=='INC' && $f==='01X') {
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/01C/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from inc01cs');
                    foreach ($data as $row) {
                        inc01c::Create([
                                'Field1'=>$row [0],
                                'filename'=>$filename,
                            ]);
                    };
                }
                $data=new inc01c();
                return view('NewSwitch/MPU/ind01c', [
                        'inc01c' => $data->inc01c(),
                        'filename'=>$filename,
                    ]);
            };
        } elseif ($e=='INC' && $a==='11C' || $e=='INC' && $f==='01C') {
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/11C/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from ind11cs');
                    foreach ($data as $row) {
                        ind11c::Create([
                                'Field1'=>$row [0],
                                'filename'=>$filename,
                            ]);
                    };
                }
                $data=new ind11c();
                return view('NewSwitch/MPU/ind11c', [
                        'ind11c' => $data->ind11c(),
                        'filename'=>$filename,
                    ]);
            };
        } elseif ($e=='IND' && $b==='ACOM') { //ACOM
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/ACOM/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from acoms');
                    foreach ($data as $row) {
                        acom::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new acom();
                return view('NewSwitch/MPU/ACOM', [
                            'acom' => $data->ACOM(),
                            'filename'=>$filename,
                        ]);
            };
        } elseif ($e=='IND' && $b==='ICOM') { // ICOM
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/ICOM/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from icoms');
                    foreach ($data as $row) {
                        icom::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new icom();
                return view('NewSwitch/MPU/ICOM', [
                            'icom' => $data->ICOM(),
                            'filename'=>$filename,
                        ]);
            };
        } elseif ($e=='INC' && $a==='11S' || $e=='INC' && $f==='01S') { // 11S 01S
            $files=file(request('mpu')->getRealPath());
            $data=(array_slice($files, 0));
            $parts =(array_chunk($data, 5000));
            foreach ($parts as $part) {
                $name=request('mpu');
                $filename=$name->getClientoriginalName();
                $fileName=uniqid()."_".$name->getClientoriginalName();
                $fileSave=resource_path('file/mpu/11S/'.$fileName.'.txt');
                file_put_contents($fileSave, $part);
            }
            $path=$fileSave;
            $filePath=glob($path);
            foreach ($filePath as $file) {
                $data=array_map('str_getcsv', file($file));
                DB::delete('delete from incs');
                foreach ($data as $row) {
                    inc::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                };
            }
            $data=new inc();
            return view('NewSwitch/MPU/inc11s', [
                            'inc11s' => $data->inc11s(),
                            'filename'=>$filename,
                        ]);
        } elseif ($e=='INC' && $d==='901' || $e=='INC' && $f==='01S_902') { // 11S_901 01S_902
            $files=file(request('mpu')->getRealPath());
            $data=(array_slice($files, 0));
            $parts =(array_chunk($data, 5000));
            foreach ($parts as $part) {
                $name=request('mpu');
                $filename=$name->getClientoriginalName();
                $fileName=uniqid()."_".$name->getClientoriginalName();
                $fileSave=resource_path('file/mpu/11S_901/'.$fileName.'.txt');
                file_put_contents($fileSave, $part);
            }
            $path=$fileSave;
            $filePath=glob($path);
            foreach ($filePath as $file) {
                $data=array_map('str_getcsv', file($file));
                DB::delete('delete from ii_incs');
                foreach ($data as $row) {
                    ii_inc::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                };
            }
            $data=new ii_inc();
            return view('NewSwitch/MPU/11s_901', [
                            'inc11s_901' => $data->inc11s_901(),
                            'filename'=>$filename,
                        ]);
        } elseif ($e=='IND' && $b==='SCOM') { // SCOM
            $files=file(request('mpu')->getRealPath());
            $data=(array_slice($files, 0));
            $parts =(array_chunk($data, 5000));
            foreach ($parts as $part) {
                $name=request('mpu');
                $filename=$name->getClientoriginalName();
                $fileName=uniqid()."_".$name->getClientoriginalName();
                $fileSave=resource_path('file/mpu/SCOM/'.$fileName.'.txt');
                file_put_contents($fileSave, $part);
            }
            $path=$fileSave;
            $filePath=glob($path);
            foreach ($filePath as $file) {
                $data=array_map('str_getcsv', file($file));
                DB::delete('delete from scoms');
                foreach ($data as $row) {
                    scom::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                };
            }
            $data=new scom();
            return view('NewSwitch/MPU/SCOM', [
                            'scom' => $data->scom(),
                            'filename'=>$filename,
                        ]);
        } elseif ($e=='IND' && $c==='901902') { // SCOM_901902
            $files=file(request('mpu')->getRealPath());
            $data=(array_slice($files, 0));
            $parts =(array_chunk($data, 5000));
            foreach ($parts as $part) {
                $name=request('mpu');
                $filename=$name->getClientoriginalName();
                $fileName=uniqid()."_".$name->getClientoriginalName();
                $fileSave=resource_path('file/mpu/SCOM_901902/'.$fileName.'.txt');
                file_put_contents($fileSave, $part);
            }
            $path=$fileSave;
            $filePath=glob($path);
            foreach ($filePath as $file) {
                $data=array_map('str_getcsv', file($file));
                DB::delete('delete from ii_scoms');
                foreach ($data as $row) {
                    ii_scom::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                };
            }
            $data=new ii_scom();
            return view('NewSwitch/MPU/Scom_901902', [
                            'scom_901902' => $data->scom_901902(),
                            'filename'=>$filename,
                        ]);
        } elseif ($e=='IND' && $b==='AERR') { // AERR
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/AERR/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from aerrs');
                    foreach ($data as $row) {
                        aerr::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new aerr();
                return view('NewSwitch/MPU/aerr', [
                            'aerr' => $data->aerr(),
                            'filename'=>$filename,
                        ]);
            };
        } elseif ($e=='INC' && $a==='11E') { // 11E
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/11E/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from inc11es');
                    foreach ($data as $row) {
                        inc11e::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new inc11e();
                return view('NewSwitch/MPU/inc11e', [
                            'inc11e' => $data->inc11e(),
                            'filename'=>$filename,
                        ]);
            };
        } elseif ($e=='IND' && $b==='IERR') { // IERR
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/mpu/IERR/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from inc11es');
                    foreach ($data as $row) {
                        ierr::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new ierr();
                return view('NewSwitch/MPU/ierr', [
                            'ierr' => $data->ierr(),
                            'filename'=>$filename,
                        ]);
            };
        } elseif ($e==='IJC' && $a==='01C') {
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/jcbnNewSwitch/01C/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from ijc01cs');
                    foreach ($data as $row) {
                        ijc01c::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new ijc01c();
                return view('NewSwitch/JCB/ijc01c', [
                            'ijc01c' => $data->ijc01c(),
                            'filename'=>$filename,
                        ]);
            };
        } elseif ($e==='IJC' && $a==='01S') {
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/jcbnNewSwitch/01S/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from ijc01_900s');
                    foreach ($data as $row) {
                        ijc01_900::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new ijc01_900();
                return view('NewSwitch/JCB/ijc01_900s', [
                            'ijc01_900s' => $data->ijc01_900s(),
                            'filename'=>$filename,
                        ]);
            };
        } elseif ($e==='IJC' && $d==='902') { // 01S_902
            $files=file(request('mpu')->getRealPath());
            $count=array_pop($files);
            unset($count);
            $data=(array_slice($files, 1));
            if ($data==[]) {
                return back()->with('nodata', " This File is Empty.");
            } else {
                $parts =(array_chunk($data, 5000));
                foreach ($parts as $part) {
                    $name=request('mpu');
                    $filename=$name->getClientoriginalName();
                    $fileName=uniqid()."_".$name->getClientoriginalName();
                    $fileSave=resource_path('file/jcbnNewSwitch/01S_902/'.$fileName.'.txt');
                    file_put_contents($fileSave, $part);
                }
                $path=$fileSave;
                $filePath=glob($path);
                foreach ($filePath as $file) {
                    $data=array_map('str_getcsv', file($file));
                    DB::delete('delete from ijc01_902s');
                    foreach ($data as $row) {
                        ijc01_902::Create([
                                    'Field1'=>$row [0],
                                    'filename'=>$filename,
                                ]);
                    };
                }
                $data=new ijc01_902();
                return view('NewSwitch/JCB/ijc01_902', [
                            'ijc01_902' => $data->ijc01_902(),
                            'filename'=>$filename,
                        ]);
            };
        } else {
            return back()->with('error', " Doesn't work this file (Please select other file).");
        }
    }
}
