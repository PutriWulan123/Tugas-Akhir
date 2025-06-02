<?php

namespace App\Models\Admin;

use App\Models\Admin\SuratMasuk\JenisSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratMasuk extends Model
{
     use HasFactory;

    protected $primary = 'id';
    
    protected $table = 'surat_masuks';

   protected $fillable = [
    'kode_surat',
    'nomor_surat',
    'id_jenis_surat',
    'judul_surat',
    'tanggal_surat',
    'deskripsi',
];


     public function devisis()
   {
    return $this->belongsTo(JenisSurat::class, 'id_jenis_surat');
   }

}
