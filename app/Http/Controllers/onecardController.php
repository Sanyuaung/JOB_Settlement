<?php

namespace App\Http\Controllers;

use App\Exports\AtmExport;
use App\Exports\COExport;
use App\Exports\PSSD01Export;
use App\Models\Atm;
use App\Models\CO;
use App\Models\onecard;
use App\Models\PSSD01;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class onecardController extends Controller
{
    public function atmhome()
    {
        return view('NewSwitch/Reports/ATM/atmhome');
    }
    public function atmprint(Request $req)
    {
        // dd($req->start);
        $validation=$req->validate([
            "start"=>"required",
            "end"=>"required",
        ]);
        $startdate=substr($req->start, 0, 4).substr($req->start, 5, 2).substr($req->start, 8, 2);
        $enddate=substr($req->end, 0, 4).substr($req->end, 5, 2).substr($req->end, 8, 2);
        $data=new Atm();
        $atm=$data->data($req);
        return view('NewSwitch/Reports/ATM/atmshow', ['atm'=>$atm,'startdate'=>$startdate,'enddate'=>$enddate]);
        
    }
    public function atmdownload($startdate,$enddate){
        $count1=substr($startdate, 6, 2);
        $count2=substr($enddate, 6, 2);
        $count=(($count2-$count1)+1)*24;
        // dd($count);
        return Excel::download(new AtmExport($startdate,$enddate,$count), "ATM Performance From $startdate to $enddate.xlsx");
    }

    public function cohome()
    {
        return view('NewSwitch/Reports/Outstanding/Cohome');
    }

    public function coprint(Request $req)
    {
        $validation=$req->validate([
            "month"=>"required",
        ]);
        $year=substr($req->month, 0, 4);
        $month=substr($req->month, 5, 2);
        $date=$year.$month;
        $data=new CO();
        $co=$data->data($req);
        // dd($co);
        return view('NewSwitch/Reports/Outstanding/Coshow', ['co'=>$co,'date'=>$date]);
    }

    public function codownload($date){
        return Excel::download(new COExport($date), "Customer Outstanding list for $date.xlsx");
    }
    public function pssd01home()
    {
        return view('NewSwitch/Reports/CBM_Reports/pssd01home');
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
        return view('NewSwitch/Reports/CBM_Reports/pssd01print', ['pssd01'=>$pssd01,'date'=>$date]);
    }
    public function pssd01download($date){
        return Excel::download(new PSSD01Export($date), "PSSD_01($date).xlsx");
    }
}