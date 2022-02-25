<?php

namespace App\Exports;

use App\Models\Atm;
use Maatwebsite\Excel\Concerns\FromCollection;

class AtmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Atm::all();
    }
}