<?php

namespace Modules\Operational\Entities;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Type extends Model
{
    protected $fillable = ['name'];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
}
