<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    use HasFactory;
    
    protected $table = 'izin';
    protected $primaryKey = 'id_izin';
    protected $fillable = ['id_staff', 'jam_masuk', 'jam_keluar', 'keperluan', 'keterangan', 'status', 'pemberi_izin'];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'id_staff');
    }
}
