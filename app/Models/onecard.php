<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class onecard extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';

    public function card()
    {
        DB::statement(DB::raw('set @row:=0'));
        $atm = DB::connection('mysql2')->select('select @row:=@row + 1) AS NO
        hour(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600)) as hours,minute(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600)) as minutes
        ,second(SEC_TO_TIME(SUM(A.ATMDOWN_DURATION)*3600)) as seconds,"744:00:00" as DOWNTIME,
        IFNULL(ROUND((SUM(A.ATMDOWN_DURATION)/720)*100,2),"100") AS DOWNTIME_PERCENT,
        IFNULL(ROUND(100-((SUM(A.ATMDOWN_DURATION)/720)*100),2),"0") AS AVALIABLE_PERCENT
        from CZ_ATMDOWN A right join CZ_ATM B on A.ATMDOWN_ATM_ID= B.ATM_ID GROUP BY B.ATM_ID');
        return $atm;
    }
}
