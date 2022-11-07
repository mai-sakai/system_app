@extends('layout')
@section('title', '商品一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>日付</th>
              <th>タイトル</th>
              <th></th>
          </tr>
          @foreach($datas as $data)
          <tr>
              <td>{{ $data->id }}</td>
              <td>{{ $data->updated_at }}</td>
              <td>{{ $data->title }}</td>
              <td>{{ $data->content }}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
@endsection
  
 








