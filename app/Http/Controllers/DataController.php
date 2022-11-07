<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    
    // *一覧を表示する
    // *@return view
    
    public function showList()
    {
        $datas = Data::all();

    

        return view('data.list',['datas' => $datas]);
    }
}
