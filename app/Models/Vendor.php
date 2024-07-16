<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = "vendors";

    protected $fillable = [
        'name',
        'address',
        'contact_name',
        'contact_number',
        'status',
        'created_by',
        'modified_by',
    ];

    public function quisioners(){
        return $this->hasMany(Quisioner::class ,'id_vendor');
    }
}
