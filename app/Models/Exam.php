<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pregnancy_id',
        'exam_name',
        'exam_date',
        'results',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pregnancy()
    {
        return $this->belongsTo(Pregnancy::class);
    }
}
