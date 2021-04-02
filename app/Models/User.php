<?php

namespace App\Models;

use App\Models\petugas;
use App\Models\penumpang;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function petugas()
    {
        return $this->hasOne(petugas::class, 'id_user');
    }
    
    public function penumpang()
    {
        return $this->hasOne(penumpang::class, 'id_user');
    }

}