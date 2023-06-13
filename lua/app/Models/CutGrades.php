<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cutGrades extends Model
{
    use HasFactory;
    protected $fillable = [
        'note',
        'year',
        'graduate_id',
        'shift'
    ];

    public function Graduation()
    {
        return $this->belongsTo(graduation::class, 'id', 'graduation_id');
    }
}
