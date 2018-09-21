<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    protected $guarded =[];
    protected $fillable = [
        'order_No',
        'pay_status',
        'timestamp',
        'user_id',
        'user_id',
        'name',
        'email',
        'scenic_id',
        'count',
        'price',
        'title',
        'img_url',
        'wechat_p'
    ];
}
