<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        '_id',
        'timestamp',
        'device_id',
        'double_latitude',
        'double_longitude',
        'double_bearing',
        'double_speed',
        'double_altitude',
        'provider',
        'accuracy',
        'label',
    ];

    public function getTimestampAttribute($value)
    {
        return date('Y-m-d H:i:s', $value/1000);
    }
}
