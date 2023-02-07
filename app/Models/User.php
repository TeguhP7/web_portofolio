<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $table = 'users'; 
    // // karena nama tabel di database users (bentuk plural), jadi nama kelas user (mewakili koneksi ke database)

    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
    ];

    public $timestamps = true;

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getData($id = null)
    {
        if ($id == null) {
            return $this->all();
        } else {
            return $this->all()->find($id);
        }
    }

}