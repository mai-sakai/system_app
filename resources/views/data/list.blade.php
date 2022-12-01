@extends('layout')
@section('title', '商品一覧')
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}</p>
      @endif
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>タイトル</th>
              <th>日付</th>
              <th></th>
              <th></th>
          </tr>
          @foreach($datas as $data)
          <tr>
              <td>{{ $data->id }}</td>
              <td><a href="data/{{ $data->id }}">{{ $data->title }}</a></td>
              <td>{{ $data->updated_at }}</td>
              <td><button type="button" class="btn btn-primary" onclick="location. href='data/edit/{{ $data->id }}'">編集</button></td>
              <form method="POST" action="{{ route('delete', $data->id) }}" onSubmit="return checkDelete()">
              @csrf
              <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
             
          </tr>
          @endforeach
      </table>
  </div>
</div>
<script>
function checkDelete(){
    if(window.confirm('削除してよろしいですか？')){
        return true;
    } else {
        return false;
    }
}
</script>
@endsection
  
 








