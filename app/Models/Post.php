<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Relacion uno a muchos inversa
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }


    // Relacion muchos a muchos
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    // Relacion uno a uno polimorfica
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
