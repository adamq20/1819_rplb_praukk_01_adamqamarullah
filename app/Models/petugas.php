<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $fillable = [
        'id_user',
        'nama_petugas'
    ];

    public function user()
    {
        return $this->belongsTo(level::class, 'id_user');
    }
}
