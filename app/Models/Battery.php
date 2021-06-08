<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battery extends Model
{
    use HasFactory;

    protected $fillable = [
        '_int',
        'timestamp',
        'device_id',
        'battery_status',
        'battery_level',
        'battery_scale',
        'battery_voltage',
        'battery_temperature',
        'battery_adaptor',
        'battery_health',
        'battery_technology',
        'label',
    ];

    public function getTimestampAttribute($value)
    {
        return date('Y-m-d H:i:s', $value/1000);
    }
}
