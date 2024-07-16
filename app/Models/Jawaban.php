<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jawaban extends Model
{
    use HasFactory;
    protected $fillable = ['jawaban', 'nilai_bobot_jawaban'] ;

    public function soal() : BelongsTo 
    {
        return $this->belongsTo(Soal::class ,'id_pertanyaan', 'id');
    }
 
}
