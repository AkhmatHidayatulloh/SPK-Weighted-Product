<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;
    protected $table = "detail_users";

    protected $fillable = [
        'iduser',
        'firstname',
        'lastname',
        'gender',
        'phone',
        'address1',
        'address2',
        'photo',
        'noted',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
}