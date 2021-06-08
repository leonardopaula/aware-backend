<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    use HasFactory;

    protected $fillable = [
        '_id',
        'timestamp',
        'device_id',
        'double_light_lux',
        'accuracy',
        'label',
    ];

    public function getTimestampAttribute($value)
    {
        return date('Y-m-d H:i:s', $value/1000);
    }
}
