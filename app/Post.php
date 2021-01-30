<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'content' => 'required|max:140',
    );

    // belongsTo結合(主テーブル <- 従テーブル)
    public function user() {
        return $this->belongsTo('App\User');
    }
}
