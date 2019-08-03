<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    protected $fillable = [
        'unique_id', 'event', 'site', 'timestamp', 'field'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
