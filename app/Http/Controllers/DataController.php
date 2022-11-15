<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

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

}
