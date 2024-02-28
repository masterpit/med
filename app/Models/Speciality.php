<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    protected $table = "specialities";
    protected $fillable = [
        'name'
    ];
    public function  specialist()
    {
        return $this->belongsTo(specialist::class);
    }
}
