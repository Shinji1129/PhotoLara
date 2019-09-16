<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $visible = [
        'owner',
    ];

    /**
     * リレーション - usersテーブル
     * @return
     */
    public function owner()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
