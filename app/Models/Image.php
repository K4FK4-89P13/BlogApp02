<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Relacion polimorfica
    public function imageable() {
        return $this->morphTo();
    }
}
