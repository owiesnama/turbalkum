<?php

namespace Modules\Operational\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Module\Entities\Module;

class Service extends Model
{
    protected $fillable = ['name'];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function types(){
        return $this->hasMany(Type::class);
    }
}
