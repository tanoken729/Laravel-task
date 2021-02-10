<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $guarded = array('id');

    // belongsTo結合(主テーブル <- 従テーブル)
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
      return $this->hasMany('App\Like', 'post_id');
    }

      /**
    * リプライにLIKEを付いているかの判定
    *
    * @return bool true:Likeがついてる false:Likeがついてない
    */
    public function is_liked_by_auth_user()
    {
      $id = Auth::id();

      $likers = array();
      foreach($this->likes as $like) {
        array_push($likers, $like->user_id);
      }

      if (in_array($id, $likers)) {
        return true;
      } else {
        return false;
      }
    }
}
