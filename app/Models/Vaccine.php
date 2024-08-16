<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pregnancy_id',
        'vaccine_name',
        'vaccination_date',
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
