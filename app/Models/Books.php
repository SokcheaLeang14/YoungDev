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
        'isbn',
        'title',
        'author_id',
        'category_id',
        'description',
        'status',
        'release_date',
        'quantity',
        'location',
    ];
    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
    public function authors()
    {
        return $this->belongsTo(Authors::class, 'author_id', 'id');
    }
}
