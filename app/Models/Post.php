<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getRouteKeyName() {
        return 'slug';
        //return parent::getRouteKeyName();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
