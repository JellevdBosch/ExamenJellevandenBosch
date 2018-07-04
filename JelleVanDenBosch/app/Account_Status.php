<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account_Status extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        ['user_id', 'banned', 'suspended', 'violation', 'suspension_start', 'suspension_end']
    ];
}
