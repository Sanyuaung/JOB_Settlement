<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PSSD01Export;
use App\Exports\PSSD04Export;
use App\Models\PSSD01;
use App\Models\PSSD04;
use Maatwebsite\Excel\Facades\Excel;
class CBMController extends Controller
{
    
    public function pssd01home()
    {
        return view('NewSwitch/Reports/CBM_Reports/PSSD_01/pssd01home');
    }
    public function pssd01print(Request $req)
    {
        $validation=$req->validate([
            "start"=>"required",
        ]);
        $date=substr($req->start, 0, 4).substr($req->start, 5, 2).substr($req->start, 8, 2);
        $data=new PSSD01();
        $pssd01=$data->data($req);
        // dd($pssd01);
        return view('NewSwitch/Reports/CBM_Reports/PSSD_01/pssd01print', ['pssd01'=>$pssd01,'date'=>$date]);
    }
    public function pssd01download($date){
        return Excel::download(new PSSD01Export($date), "PSSD_01($date).xlsx");
    }
    public function pssd04home(){
        return view('NewSwitch/Reports/CBM_Reports/PSSD_04/pssd04home');
    }
    public function pssd04print(Request $req)
    {
        $validation=$req->validate([
            "start"=>"required",
        ]);
        $date=substr($req->start, 0, 4).substr($req->start, 5, 2).substr($req->start, 8, 2);
        $data=new PSSD04();
        $pssd04=$data->data($req);
        // dd($pssd04);
        return view('NewSwitch/Reports/CBM_Reports/PSSD_04/pssd04print', ['pssd04'=>$pssd04,'date'=>$date]);
    }
    public function pssd04download($date){
        return Excel::download(new PSSD04Export($date), "PSSD_04($date).xlsx");
    }
}