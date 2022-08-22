<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //テーブル名
    protected $table = 'datas';
    
    //可変項目
    protected $fillable =
    [
        'title',
        'content'
    ]
}
