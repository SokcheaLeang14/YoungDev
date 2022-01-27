<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\Authors;
class Books extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $fillable = [
        'isbn'
    ];
    public function categories()
    {
        return $this->hasOne(Categories::class,'id');
    }
    public function authors()
    {
        return $this->hasOne(Authors::class,'id');
    }
}
