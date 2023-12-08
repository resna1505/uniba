<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_m extends Model
{
    use HasFactory;
    protected $table ="mahasiswa_ms";
    protected $fillable = [
        'id',
        'name',
        'status',
        'catatan',
    ];
}
