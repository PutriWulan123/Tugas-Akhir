<?php

namespace App\Models\Admin\SuratMasuk;

use App\Models\Admin\SuratMasuk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisSurat extends Model
{
     use HasFactory;

   
    protected $primarykey = "id";
    protected $fillable = ['id', 'nama_jenis_surat'];

    protected $table = 'jenis_surats';

    // Relasi one-to-many dengan model Pegawai
    public function suratmasuk()
    {
        return $this->hasMany(SuratMasuk::class, 'id_jenis_surat');
    }
}
