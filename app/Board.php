<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
  //relation ＄thisはboardのインスタンス,逆引きで、ボードのIDと同じ人を関連させる、
  //人はID一つにつき一人だから一対一
  //関数名がパーソンなのはそのモデルを参照している、外部キーであるパーソンIDをBoardが持ってる。
    public function person()
    {
        return $this->belongsTo('App\person');
    }


    protected $guarded = array('id');

    //validateでID必須、タイトル必須、メッセーじ必須
	public static $rules = array(
        // 'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );
//IDとタイトルと名前をまとめて返す
    public function getData()
    {
        return $this->id . ': ' . $this->title . ' (' . $this->person->name . ')';
    }

}
