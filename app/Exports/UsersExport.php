<?php

namespace App\Exports;

use App\Models\User;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

// class UsersExport implements FromCollection
class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    // public function collection()
    public function view(): View
    {
        // return User::all();
        return view('excel.user', [
            'datas' => User::all()
        ]);
    }
}
