<?php

namespace App\Exports;

use App\Models\Nutrisi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class NutrisiExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function view(): View
    {
        // return Nutrisi::all();
        return view('excel.nutrisi', [
            'datas' => Nutrisi::all()
        ]);
    }
}
