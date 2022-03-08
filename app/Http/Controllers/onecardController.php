<?php

namespace App\Http\Controllers;

use App\Exports\AtmExport;
use App\Models\Atm;
use App\Models\onecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class onecardController extends Controller
{
    public function home()
    {
        return view('NewSwitch/Reports/atmhome');
    }
    public function print(Request $req)
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
        return view('NewSwitch/Reports/atmshow', ['atm'=>$atm,'startdate'=>$startdate,'enddate'=>$enddate]);
        
    }
    public function download($startdate,$enddate){
        $count1=substr($startdate, 6, 2);
        $count2=substr($enddate, 6, 2);
        $count=(($count2-$count1)+1)*24;
        // dd($count);
        return Excel::download(new AtmExport($startdate,$enddate,$count), "ATM Performance From $startdate to $enddate.xlsx");
    }
}