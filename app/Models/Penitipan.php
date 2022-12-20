<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    protected $table = 'penitipan';
    protected $fillable = ['tanggal_titip', 'tanggal_checkout', 'lama_titip', 'layanan', 'antar_jemput', 'id_kucing'];
    
    public function kucing()
    {
        return $this->belongsTo(Kucing::class, 'id_kucing');
    }
}
