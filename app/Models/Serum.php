<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serum extends Model
{
    use HasFactory;
    protected $table = 'serum';
    protected $primaryKey = 'kode_serum';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['kode_serum', 'nama_serum', 'deskripsi', 'foto_serum'];
}
