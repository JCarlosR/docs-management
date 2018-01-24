<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use softDeletes;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRoleNameAttribute() // accessor role_name
    {
        if ($this->role == 0)
            return 'Super Admin';
        if ($this->role == 1)
            return 'Administrador';

        return 'Unknown'; // ?
    }
}
