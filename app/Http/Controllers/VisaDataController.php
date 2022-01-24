<?php

namespace App\Http\Controllers;

use App\Models\sya_visa_tran;
use App\Models\SYA_VisaTrans;
use App\Models\syavisatran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            $tranx->save();
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
}
