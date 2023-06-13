<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Univercitys extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'campus'
    ];

    public function graduation()
    {
        return $this->hasMany(Graduation::class, 'id', 'graduation_id');
    }
}
