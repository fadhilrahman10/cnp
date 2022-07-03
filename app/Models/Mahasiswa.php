<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nim', 'nama', 'jurusan', 'alamat', 'tempat_tanggal_lahir', 'email', 'no_hp'
    ];

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'mahasiswa_id', 'id');
    }
}
