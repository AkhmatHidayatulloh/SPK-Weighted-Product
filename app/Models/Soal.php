<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class soal extends Model
{
    use HasFactory;
    protected $table = "soal";
    protected $fillable = ['id_categorys','pertanyaan'];

    public function categorys(){
        return $this->belongsTo(Category::class, 'id_categorys');
    }

    public function jawaban() : HasMany 
    {
        return $this->hasMany(Jawaban::class,'id_pertanyaan');
    }
}
