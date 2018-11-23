<?php

namespace Modules\Operational\Entities;

use Illuminate\Database\Eloquent\Model;

class OperationalItem extends Model
{
    protected $fillable = [];

    public function type(){
        return $this->belongsTo(OperationalType::class);
    }
}
