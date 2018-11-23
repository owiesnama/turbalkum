<?php

namespace Modules\Module\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Operational\Entities\OperationalService;

class Module extends Model
{
    protected $fillable = ['name'];

    public function services(){
        return $this->hasMany(OperationalService::class);
    }
}
