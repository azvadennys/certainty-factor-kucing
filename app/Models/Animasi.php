<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animasi extends Model
{
    use HasFactory;
    protected $table = 'animasi';
    protected $fillable = ['nama', 'video_animasi', 'narator', 'id_serum'];
   
}
