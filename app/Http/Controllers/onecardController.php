<?php

namespace App\Http\Controllers;

use App\Models\onecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class onecardController extends Controller
{
    public function home()
    {
        return view('NewSwitch/Reports/atmhome');
    }
    public function print(Request $req)
    {
        $validation=$req->validate([
            "start"=>"required",
            "end"=>"required",
        ]);
        $startdate=substr($req->start,0,4).substr($req->start,5,2).substr($req->start,8,2);
        $enddate=substr($req->end,0,4).substr($req->end,5,2).substr($req->end,8,2);
        $count1=substr($req->start,8,2);
        $count2=substr($req->end,8,2);
        $count=(($count2-$count1)+1)*24;
        // dd("$count:00:00");
        // dd($startdate,$enddate);
        if($validation){
            DB::connection('mysql2')->statement(DB::raw('set @row:=0'));
            $atm = DB::connection('mysql2')->select("select  @row:=@row + 1 AS NO,B.ATM_ID AS ATM_ID, B.ATM_LOCATION, 
            IFNULL(concat(hour(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600)),':',minute(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600)),
            ':',second(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600))),'$count:00:00') as DOWNTIME,
            IFNULL(ROUND((SUM(A.ATMDOWN_DURATION)/$count)*100,2),'100') AS DOWNTIME_PERCENT,
            IFNULL(ROUND(100-((SUM(A.ATMDOWN_DURATION)/$count)*100),2),'0') AS AVALIABLE_PERCENT
            from CZ_ATMDOWN A right join CZ_ATM B ON A.ATMDOWN_ATM_ID= B.ATM_ID 
            AND A.ATMDOWN_DATE>=$startdate AND A.ATMDOWN_DATE<=$enddate GROUP BY B.ATM_ID,B.ATM_LOCATION Order by NO asc");
            // dd($atm);
        return view('NewSwitch/Reports/atmshow', ['atm'=>$atm,'startdate'=>$startdate,'enddate'=>$enddate]);
        }
    }
}