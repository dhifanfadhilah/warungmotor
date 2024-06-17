<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'merk',
        'model',
        'tahun',
        'image',
        'jarak',
        'judul',
        'deskripsi',
        'cc',
        'harga',
        'nego',
        'owner',
        'kontak'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'owner', 'id');
    }
}
