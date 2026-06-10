<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul',
        'slug',
        'isi',
        'gambar'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}