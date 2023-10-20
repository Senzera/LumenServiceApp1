<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'comments';

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
    protected $fillable = ['content', 'post_id'];

    /**
     * Relasi dengan model Post (jika diperlukan).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
}
