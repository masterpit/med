<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialist extends Model
{
    use HasFactory;
    protected $table = "specialists";
    protected $fillable = [
        'speciality_id',
        'experience',
    ];
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
    public function  speciality()
    {
        return $this->belongsTo(speciality::class);
    }
}
