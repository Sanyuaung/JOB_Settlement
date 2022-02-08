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
            'Debit'=>"required",
            'Credit'=>"required",
            'Prepaid'=>"required",
        ]);
        $Year=substr($req->settledate, 0, 4);
        $Month=substr($req->settledate, 5, 2);
        $Date=substr($req->settledate, 8, 2);
        // dd($Year.$Month.$Date);
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
            $tranx->Debit=$req->Debit;
            $tranx->Credit=$req->Credit;
            $tranx->Prepaid=$req->Prepaid;
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