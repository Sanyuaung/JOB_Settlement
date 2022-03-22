<?php

namespace App\Exports;

use App\Models\PSSD01;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;

class PSSD01Export implements FromCollection,WithHeadings,WithMapping,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $date;
    function __construct($date)
    {
        $this->date=$date;
    }
    
    public function map($pssd01): array
    {
        return [
            $pssd01->Report_Date,
            $pssd01->Card_Name,
            $pssd01->Category_of_Card,
            $pssd01->Currency,
            $pssd01->Used_Location,
            $pssd01->Used_Card_Quantity,
            $pssd01->Transaction_Count,
            $pssd01->Used_Card_Transaction_Amount,
            $pssd01->Used_Card_Transaction_Amount_MMK,
            $pssd01->Remark,
        ];
    }
    
    public function collection()
    {
        return collect(DB::connection('mysql2')
        ->select("select DATE_FORMAT(Txn.AUTHTXN_REQUEST_DATE,'%Y-%m-%d') as Report_Date,
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
                and AUTHTXN_REQUEST_DATE like '$this->date'
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
                and AUTHTXN_REQUEST_DATE like '$this->date'
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
        and Card.Currency = Txn.Currency"));
    }

    public function headings():array
    {
        return ["Report Date","Card Name","Category of Card","Currency","Used Location","Used Card Quantity",
        "Transaction Count","Used Card Transaction Amount","Used Card Transaction Amount_MMK","Remark"];
    }
}