<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function serie()
    {
        return $this->belongsTo(Serie::class,'serie_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
}
