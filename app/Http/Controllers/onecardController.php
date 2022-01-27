<?php

namespace App\Http\Controllers;

use App\Models\onecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class onecardController extends Controller
{
    public function card()
    {
        // $lo=DB::connection('mysql2')->select('select ATM_LOCATION FROM CZ_ATM');
        DB::statement(DB::raw('set @row:=0'));
        $atms = DB::connection('mysql2')->select("select B.ATM_ID AS ID,B.ATM_LOCATION,
        IFNULL(concat(hour(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600)),':',minute(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600))
        ,':',second(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600))),'744:00:00') as DOWNTIME,
        IFNULL(ROUND((SUM(A.ATMDOWN_DURATION)/720)*100,2),'100') AS DOWNTIME_PERCENT,
        IFNULL(ROUND(100-((SUM(A.ATMDOWN_DURATION)/720)*100),2),'0') AS AVALIABLE_PERCENT
        from CZ_ATMDOWN A right join CZ_ATM B
        ON A.ATMDOWN_ATM_ID= B.ATM_ID 
        AND A.ATMDOWN_DATE>='20211201' AND A.ATMDOWN_DATE<='20211231' GROUP BY B.ATM_ID,B.ATM_LOCATION");
        dd($atms);
        return view('onecard', [
            'atm' => $atms,
        ]);
    }
}
