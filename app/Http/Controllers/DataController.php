<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Http\Requests\BlogRequest;

class DataController extends Controller
{
    
    // *一覧を表示する
     //*@return view
    
    public function showList()
    {
        $datas = Data::all();

    

        return view('data.list',['datas' => $datas]);
    }

    // *詳細を表示する
    //*@param int $id
    //*@return view
    
    public function showDetail($id)
    {
        $data = Data::find($id);

        if (is_null($data->id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('datas'));
        }

        return view('data.detail',['data' => $data]);
    }
   // *登録画面を表示する
    //*
    //*@return view
    public function showCreate() 
    {
        return view('data.form');
    }

    // *登録する
    //*
    //*@return view
    public function exeStore(BlogRequest $request) 
    {
        //ブログのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            //ブログを登録
            Data::create($inputs);
            \DB::commit();
        } catch(\Throwble $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを登録しました');
        return redirect(route('datas'));
    }

     // *編集フォームを表示する
    //*@param int $id
    //*@return view
    
    public function showEdit($id)
    {
        $data = Data::find($id);

        if (is_null($data->id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('datas'));
        }

        return view('data.edit',['data' => $data]);
    }

     // *更新する
    //*
    //*@return view
    public function exeUpdate(BlogRequest $request) 
    {
        //ブログのデータを受け取る
        $inputs = $request->all();


        \DB::beginTransaction();
        try {
            //ブログを更新
            $data = Data::find($inputs ['id'] );
            $data->fill([
                'title' => $inputs['title'],
                'content' => $inputs['content'],
            ]);
            $data->save();
            \DB::commit();
        } catch(\Throwble $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを更新しました');
        return redirect(route('datas'));
    }
      //削除
    //*@param int $id
    //*@return view
    
    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('datas'));
        }

        try {
            //ブログを削除
            Data::destroy($id);
        } catch(\Throwble $e) {
            \DB::rollback();
            abort(500);
        }
       

        \Session::flash('err_msg', '削除しました。');
        return redirect(route('datas'));
    }

}
