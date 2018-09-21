<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'imgs';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
