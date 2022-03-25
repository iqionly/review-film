<?php

namespace App\Exports;

use App\Models\Film;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FilmExport implements FromQuery, WithHeadings
{
    public function query()
    {
        return Film::query();
    }
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Film::query();
    // }

    public function headings() : array
    {
        $columns = Schema::getColumnListing('film');
        return $columns;
    }
}
