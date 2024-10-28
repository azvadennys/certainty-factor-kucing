<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengetahuan extends Model
{
    use HasFactory;
    protected $table = 'pengetahuan';
    public $timestamps = false;

    protected $fillable = ['kode_serum', 'kode_gejala', 'nilai_cf'];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'kode_gejala', 'kode_gejala');
    }

    public function serum()
    {
        return $this->belongsTo(Serum::class, 'kode_serum', 'kode_serum');
    }
}
