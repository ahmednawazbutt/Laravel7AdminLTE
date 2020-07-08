<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class User extends \App\User
{
    protected $table = 'users'; // table name for this model

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        static::creating(function($model){
            // set model properties
            // you want to be set by default
            // on boot
        });
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('verified', function(Builder $builder){
            $builder->where('email_verified_at', '!=', NULL);
        });
    }
}
