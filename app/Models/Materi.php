<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_materi';
    protected $fillable = [
        'nm_materi',
        'nm_uploader',
        'link',
        'kat_materi',
        'stts_materi'
    ];
}
