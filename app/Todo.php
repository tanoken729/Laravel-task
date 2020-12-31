<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array
    (
        'comment' => 'required',
        // 'state' => 'required'
            //createで保存される前にvalidateをかましてるからその時点ではstateがnullとなってしまいpostできないから削除
            //保存された後デフォルトが1のstateがviewで表示される
    );
}
