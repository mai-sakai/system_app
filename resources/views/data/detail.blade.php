@extends('layout')
@section('title', '商品一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>{{ $data->title }}</h2>
      <span>作成日:{{ $data->created_at }}</span>
      <span>更新日:{{ $data->updated_at }}</span>
      <p>{{ $data->content }}</p>
  </div>
</div>
@endsection
  