<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarKos extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "kamar_kos";
    protected $primaryKey = 'id_nama';
    public $timestamps = false;
}
