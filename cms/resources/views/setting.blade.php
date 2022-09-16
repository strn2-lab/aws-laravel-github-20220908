<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class = "container">
    <div class="card-body">
        <div class="card-title">
            設定
        </div>

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 本のタイトル -->
        <form enctype="multipart/form-data" action="{{ url('books') }}"
        method="POST" class="form-horizontal">
            @csrf
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="book" class="col-sm-6 control-label">名前</label>
                    <input type="text" name="item_date" class="form-control" value="{{ old('item_date') }}">
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-6 control-label">メールアドレス</label>
                    <input type="time" name="item_number" class="form-control" value="{{ old('item_number') }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-6 control-label">パスワード</label>
                    <input type="time" name="item_number2" class="form-control" value="{{ old('item_number2') }}">
                </div>
            </div>
            <div class="col-sm-6">
                <label>アイコン</label>
                  <input type="file" name="item_file">
            </div>

        </form>
    </div>
    
    @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif


    

@endsection