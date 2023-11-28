<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticatable;

class user extends Authenticatable
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = ['id_user', 'username', 'password','role'];
}
