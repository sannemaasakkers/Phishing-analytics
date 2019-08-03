<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Move extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    protected $fillable = [
        'unique_id', 'event', 'site', 'timestamp', 'mouseX', 'mouseY'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
