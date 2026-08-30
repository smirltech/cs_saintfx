<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'code',
        'logo',
        'address',
        'phone',
        'email',
        'website',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
    ];
}
