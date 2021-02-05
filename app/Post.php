<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

    // belongsTo結合(主テーブル <- 従テーブル)
    public function user() {
        return $this->belongsTo('App\User');
    }
}
