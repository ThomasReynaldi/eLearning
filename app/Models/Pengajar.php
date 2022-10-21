<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pengajar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pengajar';
    protected $fillable = [
        'nm_pengajar',
        'wkt_mulai',
        'wkt_akhir',
        'stts_pengajar'
    ];
}
