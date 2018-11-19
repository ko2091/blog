<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // タイトルとボディは変更可能?
    protected $fillable = ['title','body'];
// リレーション
    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
