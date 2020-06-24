<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'group_id',
        'name',
        'cpf',
        'rg',
        'username',
        'password',
        'hash',
        'email',
        'admin'
    ];

    protected $hidden = [
        'password',
        'hash'
    ];

    public function user()
    {
        return $this->hasMany(Group::class);
    }

}
