<?php

namespace App\Exports;

use App\Models\Identifikasi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class IdentifikasiExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function view(): View
    {
        // return Identifikasi::all();
        return view('excel.identifikasi', [
            'datas' => Identifikasi::all()
        ]);
    }
}
