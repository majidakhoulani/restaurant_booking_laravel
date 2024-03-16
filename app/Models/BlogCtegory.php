<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCtegory extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function posts()
    // {
    //     return $this->hasMany(Post::class, 'blogcat_id', 'id');
    // }

}
