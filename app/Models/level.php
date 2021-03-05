<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\petugas;

class level extends Model
{
    use HasFactory;

    protected $table = 'level';
    protected $fillable = [
        'nama_level'
    ];

    public function petugas()
    {
        return $this->hasOne(petugas::class, 'id_level');
    }
}
