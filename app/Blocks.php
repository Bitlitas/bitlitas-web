<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blocks extends Model
{
    protected $fillable = [
        'block_height', 'amount', 'timestamp'
    ];
}
