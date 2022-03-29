<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }

}
