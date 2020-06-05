<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'name',
        'description',
        'price',
        'active'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
