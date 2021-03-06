<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [

        'post_id','user_id','description'
    ];
    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }
}
