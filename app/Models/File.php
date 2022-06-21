<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    // use HasFactory;
    protected $table = 'files'; // kita beri tahu bahwa nama databasenya files
    public $timestamps = false; // untuk mematikan fitur timestamp bawaan laravel karena kita tidak memerlukannya
    protected $primaryKey = 'id_file'; // memberi tahu primary key table
}
