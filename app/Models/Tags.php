<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Nama kolom primary key dari tabel.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Kolom-kolom yang dapat diisi.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Waktu pembuatan dan pembaruan catatan diaktifkan.
     *
     * @var bool
     */
    public $timestamps = true;
}
