<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'email', 'password', 'department', 'telephone', 'image', 'remember_token'];

    protected $table = 'students';
}
