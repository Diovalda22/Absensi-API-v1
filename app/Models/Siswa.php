<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $guarded = ['id'];
    protected $with = ['kelas', 'orang_tua'];
    public $timestamps = false;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function orang_tua()
    {
        return $this->belongsTo(OrangTua::class, 'orang_tua_id');
    }
}
