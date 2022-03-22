<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PSSD01 extends Model
{
    use HasFactory;
    public $connection="mysql2";

    public static function data(Request $req)
    {
        $validation=$req->validate([
            "start"=>"required",
        ]);
        $date=substr($req->start, 0, 4).substr($req->start, 5, 2).substr($req->start, 8, 2);
        if ($validation) {
            DB::connection('mysql2')->statement(DB::raw('set @row:=0'));
            $data = DB::connection('mysql2')->select("select DATE_FORMAT(Txn.AUTHTXN_REQUEST_DATE,'%Y-%m-%d') as Report_Date,
            Card.Card_Name, Card.Category_of_Card, Card.Currency,Used_Location, Card.Used_Card_Quantity, Txn.Transaction_Count,
            Txn.Used_Card_Transaction_Amount, Txn.Used_Card_Transaction_Amount_MMK,MarketRate as Remark from
            (select Card_Name, Category_of_Card, Currency,
                    case when Currency like 'MMK' then 'Local' else 'Oversea' end as Used_Location,
                    count(*) as Used_Card_Quantity from
                    (select 
                    case when AUTHTXN_CRDPLAN_ID like '%CRD%' then 'MPU'
                         when AUTHTXN_CRDPLAN_ID like '%MPU_DEBIT%' then 'MPU'
                         when AUTHTXN_CRDPLAN_ID like '%CORP_DEBIT%' then 'MPU'
                         when AUTHTXN_CRDPLAN_ID like '%MU%' then 'UPI'
                         when AUTHTXN_CRDPLAN_ID like '%MOB_UPI_DB%' then 'UPI'
                         end as Card_Name,
                    case when AUTHTXN_CRDPLAN_ID like '%CRD%' then 'Credit'
                         when AUTHTXN_CRDPLAN_ID like '%MPU_DEBIT%' then 'Debit'
                         when AUTHTXN_CRDPLAN_ID like '%CORP_DEBIT%' then 'Debit'
                         when AUTHTXN_CRDPLAN_ID like '%MU%' then 'Cobrand'
                         when AUTHTXN_CRDPLAN_ID like '%MOB_UPI_DB%' then 'Cobrand' 
                         end as Category_of_Card,
                         AUTHTXN_CRDPLAN_ID, CURRENCY_CODE as Currency, count(*) as Transaction_Count, sum(AUTHTXN_REQUEST_AMT) as Used_Card_Transaction_Amount,
                         sum(AUTHTXN_APPROVED_AMT) as Used_Card_Transaction_Amount_MMK
                    from CZ_AUTHTXN A, CZ_CURRENCY B
                    where A.AUTHTXN_CURRENCY_CODE = B.CURRENCY_ID
                    and AUTHTXN_CARDHOLDER_NAME is not null
                    and AUTHTXN_RESPONSE_CODE like '00'
                    and AUTHTXN_REQUEST_DATE like '$date'
                    and AUTHTXN_REQUEST_AMT > 0
                    and AUTHTXN_TXNTYPE_ID not like 'R%'
                    and AUTHTXN_TXNTYPE_ID not like 'V%'
                    and AUTHTXN_TXNTYPE_ID not like 'CTRFER'
                    and AUTHTXN_SETTLED_IND like 'Y'
                    group by  Card_Name, Category_of_Card, Currency,AUTHTXN_CURRENCY_CODE, AUTHTXN_CRDPLAN_ID, A.AUTHTXN_CARD_NO)B
                    group by Card_Name, Category_of_Card, Currency)Card,
            (select Card_Name, Category_of_Card, Currency,sum(Transaction_Count) as Transaction_Count,
                    round(sum(Used_Card_Transaction_Amount_MMK)/C.MarketRate,2)  as Used_Card_Transaction_Amount,
                    round(sum(Used_Card_Transaction_Amount_MMK),2) as Used_Card_Transaction_Amount_MMK, B.AUTHTXN_REQUEST_DATE,C.MarketRate
                    from
                    (select A.AUTHTXN_REQUEST_DATE,
                    case when AUTHTXN_CRDPLAN_ID like '%CRD%' then 'MPU'
                         when AUTHTXN_CRDPLAN_ID like '%MPU_DEBIT%' then 'MPU'
                           when AUTHTXN_CRDPLAN_ID like '%CORP_DEBIT%' then 'MPU'
                         when AUTHTXN_CRDPLAN_ID like '%MU%' then 'UPI'
                         when AUTHTXN_CRDPLAN_ID like '%MOB_UPI_DB%' then 'UPI'
                         end as Card_Name,
                    case when AUTHTXN_CRDPLAN_ID like '%CRD%' then 'Credit'
                         when AUTHTXN_CRDPLAN_ID like '%MPU_DEBIT%' then 'Debit'
                         when AUTHTXN_CRDPLAN_ID like '%CORP_DEBIT%' then 'Debit'
                         when AUTHTXN_CRDPLAN_ID like '%MU%' then 'Cobrand'
                         when AUTHTXN_CRDPLAN_ID like '%MOB_UPI_DB%' then 'Cobrand' 
                         end as Category_of_Card,
                         AUTHTXN_CRDPLAN_ID, CURRENCY_CODE as Currency, count(*) as Transaction_Count, sum(AUTHTXN_REQUEST_AMT) as Used_Card_Transaction_Amount,
                         sum(AUTHTXN_APPROVED_AMT) as Used_Card_Transaction_Amount_MMK
                    from CZ_AUTHTXN A, CZ_CURRENCY B
                    where A.AUTHTXN_CURRENCY_CODE = B.CURRENCY_ID
                    and AUTHTXN_CARDHOLDER_NAME is not null
                    and AUTHTXN_RESPONSE_CODE like '00'
                    and AUTHTXN_REQUEST_DATE like '$date'
                    and AUTHTXN_REQUEST_AMT > 0
                    and AUTHTXN_TXNTYPE_ID not like 'R%'
                    and AUTHTXN_TXNTYPE_ID not like 'V%'
                    and AUTHTXN_TXNTYPE_ID not like 'CTRFER'
                    and AUTHTXN_SETTLED_IND like 'Y'
                    group by AUTHTXN_REQUEST_DATE,CURRENCY_CODE,AUTHTXN_CURRENCY_CODE, AUTHTXN_CRDPLAN_ID) B, KCN_EXCHANGE C
                    where B.AUTHTXN_REQUEST_DATE = C.CurrencyDate
                    group by Card_Name, Category_of_Card, Currency,MarketRate,AUTHTXN_REQUEST_DATE)Txn
                    where Card.Card_Name = Txn.Card_Name
            and Card.Category_of_Card = Txn.Category_of_Card
            and Card.Currency = Txn.Currency");
            return $data;
        }
    }
}