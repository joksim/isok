<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class Task extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function project()
    {
       return $this->belongsTo('App\Project');
    }
}