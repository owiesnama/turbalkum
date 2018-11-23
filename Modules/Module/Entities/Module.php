<?php

namespace Modules\Module\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Operational\Entities\Service;

class Module extends Model
{
    protected $fillable = ['name'];

    public function services(){
        return $this->hasMany(Service::class);
    }
}
