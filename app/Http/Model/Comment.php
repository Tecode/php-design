<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'zy_comment';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
