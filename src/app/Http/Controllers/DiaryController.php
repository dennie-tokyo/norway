<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Common\Norway;

class DiaryController extends Controller
{

    public function index(Request $request, Norway $norway) {

        $result = $norway->isDevice($request);
        
        if($result){
            return view('diary');
        }
        
        return view('diary');
    }
    
    public function detail($diary, Request $request, Norway $norway) {

        //現在の選択しているカテゴリ情報を取得する。
        $collection = $norway->getSelectedCategoryInfo($diary);
        
        //全てのカテゴリ情報を取得する。
        $collections = $norway->getAllCategoryInfo();
        
        //デバイス種別を取得する。
        $result = $norway->isDevice($request);

        //スマホの場合はスマホ用のページを表示する。
        if($result){
            return view('detail.smart.main')
                    ->with("data", $collection)
                    ->with("infos", $collections)
                    ->with("flg", false);
        }
        
        //モードが指定されている場合、スマホ用レイアウトでデザインフラグをtrueにする。
        $mode = $request->get("mode","");
        if($mode !== ""){
            return view('detail.smart.main')
                    ->with("data", $collection)
                    ->with("infos", $collections)
                    ->with("flg", true);
        }
        
        //2カラムレイアウトでデザインフラグをtrueにする。
        return view('detail.main')
                ->with("data", $collection)
                ->with("infos", $collections)
                ->with("flg", true);
    }
    
}
