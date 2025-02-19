<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;
    
    protected $table = 'staff';
    protected $primaryKey = 'id_staff';
    protected $fillable = ['nama_staff', 'jabatan', 'password'];

    protected $hidden = ['password'];
}
    