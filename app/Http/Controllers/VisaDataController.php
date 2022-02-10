<?php

namespace App\Http\Controllers;

use App\Models\syavisatran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisaDataController extends Controller
{
    public function visa()
    {
        return view('NewSwitch/VISA/visa');
    }

    public function insert(Request $req)
    {
        $validation=$req->validate([
            'settledate'=> "required",
            'num'=>"required",
            'usd'=>"required",
            'mmk'=>"required",
            'rate'=>"required",
            'typeOfTrans'=>"required",
            'commAmt'=>"required",
            'cardType'=>"required",
            'currency'=>"required"
        ]);
        $Year=substr($req->settledate, 0, 4);
        $Month=substr($req->settledate, 5, 2);
        $Date=substr($req->settledate, 8, 2);
        // dd($req->cardType,$req->typeOfTrans);
        $settledate=$Year.$Month.$Date;
        if ($validation) {
            //insert data to DB
            $tranx=new syavisatran();
            $tranx->settleDate=$settledate;
            $tranx->noTrans=$req->num;
            $tranx->usdAmt=$req->usd;
            $tranx->mmkAmt=$req->mmk;
            $tranx->exRate=$req->rate;
            $tranx->typeOfTrans=strtoupper($req->typeOfTrans);
            $tranx->commAmt=$req->commAmt;
            $tranx->cardType=$req->cardType;
            $tranx->currency=strtoupper($req->currency);
            $tranx->save();
            // DB::connection('mysql2')->select("insert into $tranx (settleDate,noTrans,usdAmt,mmkAmt,exRate,typeOfTrans,commAmt) 
            // VALUES ('$settledate','$req->num','$req->usd','$req->mmk','$req->rate''$req->typeOfTrans''$req->commAmt')");   
            return back()->with("success", "Input Data Successful");
        } else {
            return back()->withErrors($validation);
        }
    }

    public function show()
    {
        // DB::statement(DB::raw('set @row:=0'));
        // $no = DB::connection('mysql2')->select('select @row:=@row + 1) AS NO from syavisatrans');
        $tranx=syavisatran::latest()->paginate(7); // latest to first
        return view('NewSwitch/VISA/showall', ['tranxs'=>$tranx]);
    }
    
    public function ccy()
    {
        return view('NewSwitch/VISA/currency');
    }

    public function ccyinsert(Request $req)
    {
        $validation=$req->validate([
            'date'=> "required",
            'rate'=>"required",
            'ccy'=>"required",
        ]);
        $Year=substr($req->date, 0, 4);
        $Month=substr($req->date, 5, 2);
        $Date=substr($req->date, 8, 2);
        // dd($Year.$Month.$Date);
        $date=$Year.$Month.$Date;
        if ($validation) {
                DB::statement(DB::raw('set @row:=0'));
                DB::connection('mysql2')->select("insert into KCN_EXCHANGE (CurrencyDate,CURRENCY_CODE,MarketRate) VALUES ('$date','$req->ccy','$req->rate')");            
            return back()->with("success", "Input Data Successful");
        } else {
            return back()->withErrors($validation);
        }
    }
}