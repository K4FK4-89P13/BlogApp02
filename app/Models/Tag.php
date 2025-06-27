<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Relacion muchos a muchios
    public function posts() {
        return $this->belongsToMany((Post::class));
    }
}
