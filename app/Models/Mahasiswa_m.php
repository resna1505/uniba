<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;

class Mahasiswa_m extends Model
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    protected $table ="mahasiswa";
    protected $fillable = [
        'id',
        'name',
        'status',
        'catatan',
    ];
}
