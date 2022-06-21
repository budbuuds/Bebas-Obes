<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identifikasi extends Model
{
    use HasFactory;

    protected $table='identifikasi';
    protected $fillable = [
        'users_id',
        'name',
        'tinggi',
        'berat_asli',
        'berat_ideal',
        'kategori',
    ];

    public function users()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User');
    }
}
