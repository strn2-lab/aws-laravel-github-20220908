@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card border-dark mb-3">
        <div class="card-header">
          <h3>退会の確認</h3>
        </div>
      <div class="card-body">
        <p class="card-text">退会をすると投稿も全て削除されます。</p>
        <p class="card-text">それでも退会をしますか？</p>
      </div>
    </div>

    <div class="btn-group">
        <form action="{{ url('users/deleteconfirm/userdestroy') }}" method="POST">
        	@csrf
            @method('DELETE')
            {!!Form::submit('退会する',['class'=>'btn btn-danger'])!!}
        </form>

        <div class="ml-3">
            <a href="/" class="btn btn-primary">キャンセルする</a>
        </div>
    </div>
</div>
@endsection