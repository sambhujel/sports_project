<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\MOodels\User;

class Submit extends Model
{
    protected $fillable = [
        'email',
        'name',
        'phone',
        'date',
        'time',
        'sport',
        'book',
        'image',
        'serial'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
