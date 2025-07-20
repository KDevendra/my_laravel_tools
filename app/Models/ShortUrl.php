<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    protected $table = 'short_urls';

    protected $fillable = [
        'original_url',
        'short_code',
        'ip_address',
        'browser',
        'device',
        'os',
        'clicks',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'clicks' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer',
    ];
}