<?php

namespace App\Http\Controllers;

use App\Models\syavisatran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
            'Net'=>"required",
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
            $tranx->netAmt=$req->Net;
            $tranx->typeOfTrans=strtoupper($req->typeOfTrans);
            $tranx->commAmt=$req->commAmt;
            $tranx->cardType=$req->cardType;
            $tranx->currency=strtoupper($req->currency);
            $tranx->save();
            Alert::success('Sucessfully added');
            return back();
        } else {
            return back()->withErrors($validation);
        }
    }

    public function show()
    {
        $tranx=syavisatran::latest()->paginate(10); // latest to first
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
            $a=DB::connection('mysql2')->select("select CurrencyDate from KCN_EXCHANGE where CurrencyDate=$date");
            if (empty($a)) {
                DB::connection('mysql2')->select("insert into KCN_EXCHANGE (CurrencyDate,CURRENCY_CODE,MarketRate) VALUES ('$date','$req->ccy','$req->rate')");
                Alert::success('Sucessfully added');
                return back();
            } elseif ($a[0]->CurrencyDate=$date) {
                Alert::info('Already Imported');
                return back();
            } else {
                return back()->withErrors($validation);
            }
        }
    }
}