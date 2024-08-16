<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pregnancy_id',
        'medication_name',
        'dosage',
        'start_date',
        'end_date',
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
