<?php

namespace Modules\Operational\Entities;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;

class OperationalType extends Model
{
    protected $fillable = ['name'];

    public function service(){
        return $this->belongsTo(OperationalService::class);
    }

    public function items(){
        return $this->hasMany(OperationalItem::class);
    }
}
