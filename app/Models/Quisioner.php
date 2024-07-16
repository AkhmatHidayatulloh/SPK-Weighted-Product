<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quisioner extends Model
{
    protected $table = "penampung_quisioner";
    protected $fillable = ['nilai'];

    public function categorys() : BelongsTo 
    {
        return $this->belongsTo(Category::class ,'id_categorys', 'id');
    }

    public function vendors() : BelongsTo 
    {
        return $this->belongsTo(Vendor::class ,'id_vendor', 'id');
    }
}
