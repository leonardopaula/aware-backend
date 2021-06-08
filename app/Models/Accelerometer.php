<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accelerometer extends Model
{
    use HasFactory;

    protected $fillable = [
        '_int',
        'timestamp',
        'device_id',
        'double_values_0',
        'double_values_1',
        'double_values_2',
        'accuracy',
        'label',
    ];

    public function getTimestampAttribute($value)
    {
        return date('Y-m-d H:i:s', $value/1000);
    }
}
