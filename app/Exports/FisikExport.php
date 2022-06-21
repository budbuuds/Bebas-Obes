<?php

namespace App\Exports;

use App\Models\Fisik;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class FisikExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function view(): View
    {
        // return Fisik::all();
        return view('excel.fisik', [
            'datas' => Fisik::all()
        ]);
    }
}
