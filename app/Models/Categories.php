<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories'; // Nama tabel di database
    protected $primaryKey = 'id'; // Nama kolom primary key
    protected $fillable = ['name']; // Kolom yang dapat diisi (sesuaikan dengan struktur tabel)
    public $timestamps = true; // Tabel ini memiliki kolom created_at dan updated_at

    // Definisikan relasi jika diperlukan
    // public function posts()
    // {
    //     return $this->hasMany(Post::class, 'category_id', 'id');
    // }
}
