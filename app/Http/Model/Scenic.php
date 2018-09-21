<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Scenic extends Model
{
    protected $table = 'scenic_spot';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'price',
        'number',
        'city',
        'package',
        'describe',
        'discount',
        'recommend',
        'hot',
        'local',
        'day',
        'other',
        'serialNo',
        'timestamp',
        'date_time'
    ];
}
