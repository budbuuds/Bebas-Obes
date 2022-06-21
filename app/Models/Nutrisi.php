<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrisi extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table='nutrisi';
    protected $fillable = [
        'users_id',
        'tanggal',
        'karbohidrat1',
        'karbohidrat2',
        'karbohidrat3',
        'protein1',
        'protein2',
        'protein3',
        'lemak1',
        'lemak2',
        'lemak3',
        'vitamin1',
        'vitamin2',
        'vitamin3',
        'serat1',
        'serat2',
        'serat3',
        'minuman1',
        'minuman2',
        'minuman3',
        'porsi1',
        'porsi2',
        'porsi3 ',
        'selingan1',
        'selingan2',
        'selingan3',
    ];

    public function users()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User');
    }
}
