<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentEvent extends Model
{
    protected $guarded = [];

    protected $casts = [
        'payload' => 'array',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
