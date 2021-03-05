<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\level;

class petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $fillable = [
        'id_level',
        'username',
        'password',
        'nama_petugas'
    ];

    public function level()
    {
        return $this->belongsTo(level::class, 'id_level');
    }
}
