<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categorys";

    protected $fillable = [
        'name', 'description', 'bobot','benefit'
    ];

    public function soals(){
        return $this->hasMany(Soal::class ,'id_categorys');
    }

    public function quisioners(){
        return $this->hasMany(Quisioner::class ,'id_categorys');
    }
}
