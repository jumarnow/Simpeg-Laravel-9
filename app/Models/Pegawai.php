<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    public function agama()
    {
       return $this->belongsTo(Agama::class, 'agama_id', 'id_agm'); 
    }
    public function negara()
    {
       return $this->belongsTo(Negara::class, 'negara_id', 'id_ngr'); 
    }
    public function darah()
    {
       return $this->belongsTo(GolonganDarah::class, 'gol_darah_id', 'id_darah'); 
    }
    public function keluarga()
    {
       return $this->belongsTo(Keluarga::class, 'skeluarga_id', 'kdstatusk'); 
    }

    public function pendidikan()
    {
       return $this->hasMany(Pendidikan::class, 'pegawai_id','id'); 
    }
    
    public function pelatihan()
    {
       return $this->hasMany(Pelatihan::class, 'pegawai_id','id'); 
    }
    
    public function pengalaman()
    {
       return $this->hasMany(Pengalaman::class, 'pegawai_id','id'); 
    }
}
