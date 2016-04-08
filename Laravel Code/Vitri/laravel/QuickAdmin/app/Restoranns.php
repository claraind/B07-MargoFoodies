<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Restoranns extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'restoranns';
    
    protected $fillable = [
          'nama',
          'telepon',
          'lokasi',
          'deskripsi',
          'tax',
          'rate'
    ];
    

    public static function boot()
    {
        parent::boot();

        Restoranns::observe(new UserActionsObserver);
    }
    
    
    
    
}