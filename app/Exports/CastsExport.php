<?php

namespace App\Exports;

use App\Models\Cast;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CastsExport implements FromQuery, WithHeadings
{
    public function query()
    {
        return Cast::query();
    }

    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Cast::all();
    // }

    public function headings() : array
    {
        $columns = Schema::getColumnListing('cast');
        return $columns;
    }
}
