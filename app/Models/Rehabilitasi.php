<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehabilitasi extends Model
{
    use HasFactory;
    protected $table = 'rehabilitasi';
    protected $fillable = [
        'nama',
        'umur',
        'j_kel',
        'alamat',
        'tanggal_pelaksanaan',
        'kontak',
        'lokasi_pelaksanaan',
        'user_id',
        'layanan_id'
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
