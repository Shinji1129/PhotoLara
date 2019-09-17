<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $visible = [
        'owner',
    ];

    protected $perPage = 6;

    /**
     * リレーション - usersテーブル
     * @return
     */
    public function owner()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
