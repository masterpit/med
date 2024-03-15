<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $fillable = [
        'category_id',
        'name',
        'view_id',
        'text'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function view()
    {
        return $this->belongsTo(view::class);
    }
}
