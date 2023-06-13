<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class graduation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'univercity_id',
        'period'
    ];

    public function Univercity()
    {
        return $this->belongsTo(Univercitys::class, 'id', 'univercity_id');
    }

    public function CutGrades()
    {
        return $this->hasMany(cutGrades::class, 'id','cutgrades_id');
    }
}
