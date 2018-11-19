<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
// use App\person;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{

    public function index(Request $request)
    {

        //$items = Board::with('person')->get();
        //本来は上、ぺジネーションで５まで表示
        $user = Auth::user();
//リレーションでボードのデータを取得して、そのIDと同じパーソンデータIDも取得
        $items = Board::with('person')->orderBy('created_at','desc')->Paginate(5);

        $param = ['items' => $items,'user' => $user];
        // $items = Board::with('person')->simplePaginate(5);
        return view('board.index', $param);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
      //validateボードコントローラのルールに従う、
        $this->validate($request, Board::$rules);
        //新しくインスタンスを生成、ボードクラスから
        $board = new Board;
        //$formに送られてきたものの全てを格納
        $form = $request->all();
        //unsetでフォーむのcsrfトークンを消している
        unset($form['_token']);
        //保存。フォームを引数にしてFILLメソッドを呼ぶ、boardに代入してSAVEで保存
        //もしくは。　一つつ値を代入してから保存

        //$person new Person,
        //$erson->name = $request->name;でもいい
//ログインしているユーザIDで投稿
        $board->person_id = Auth::id();
        $board->fill($form)->save();
        // $board->fill($form)->save();
        ///boardにリダイレクト
        return redirect('/board');
    }
//session、まずプットで送られてきたリクエストをsession->put()メソッドで保存、
//session_dataとして返す
    public function ses_get(Request $request){
      //下でsessionからmsgを＄sesdataに格納
      $sesdata = $request->session()->get('msg');
      //session_dataとして返す
      return view('board.session',['session_data' => $sesdata]);
    }
    //
    public function ses_put(Request $request){
      //送られてきたリクエストのインプットプロパティをmsgに格納
      $msg = $request->input;
      //下でmsgとしてsessionに保管
      $request->session()->put('msg',$msg);
      return redirect('board/session');
    }

    public function logout(){
      Auth::logout();
      return redirect('/board');
    }

}
