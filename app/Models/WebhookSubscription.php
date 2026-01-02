<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebhookSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'salon_id','name','target_url','enabled','secret','events'
    ];

    protected $casts = [
        'enabled' => 'boolean',
        'events' => 'array',
    ];
}
