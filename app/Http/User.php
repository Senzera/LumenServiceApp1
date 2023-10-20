<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // Nama tabel pengguna dalam database
    protected $fillable = ['name', 'email', 'password']; // Kolom yang dapat diisi secara massal

    // ...
}
