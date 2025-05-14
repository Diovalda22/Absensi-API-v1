<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;
    protected $table = 'orang_tua';
    protected $fillable = [
        'nama',
        'no_hp',
    ];
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
