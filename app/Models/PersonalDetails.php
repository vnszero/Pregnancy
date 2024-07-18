<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'date_of_birth',
        'height',
        'job',
        'name',
        'phone',
        'reliable_person_name',
        'reliable_person_phone',
        'skin_color',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
