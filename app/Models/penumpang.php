<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class penumpang extends Model
{
    use HasFactory;

    protected $table = 'penumpang';
    protected $fillable = [
        'id_user',
        'nama_penumpang',
        'alamat_penumpang',
        'tanggal_lahir',
        'jenis_kelamin',
        'telepon'
    ];

    public function user()
    {
        return $this->belongsTo(level::class, 'id_user');
    }
}
