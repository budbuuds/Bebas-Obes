<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fisik extends Model
{
    use HasFactory;

    protected $table='fisik';
    protected $fillable = [
        'users_id',
        'tanggal',
        'jenis1',
        'durasi1',
        'jenis2',
        'durasi2',
        'jenis3',
        'durasi3',
    ];

    public function users()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User');
    }
}
