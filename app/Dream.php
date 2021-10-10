<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
    protected $fillable = [
        'name', 'tag', 'train',
    ];
    protected $table = 'lists';
}
