<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = [
        'plan_id',
        'name',
        'active'
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

}
