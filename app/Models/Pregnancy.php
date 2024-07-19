<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'birth_type',
        'ectopic',
        'eclampsia',
        'pregnancy_type',
        'result',
        'risk',
        'status',
        'start_blood_pressure',
        'start_weight',
        'start_date_method',
        'probable_birth_date',
        'start_date',
        'end_date',
        'medical_notes',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'probable_birth_date' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
        'ectopic' => 'boolean',
        'eclampsia' => 'boolean',
    ];

    /**
     * Get the user that owns the pregnancy.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
