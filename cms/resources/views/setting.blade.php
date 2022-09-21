<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class = "container">
    <div class="card-body">
        <div class="card-title">
            ユーザー設定
        </div>

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 本のタイトル -->
        <form action="{{ url('setting/settingupdate') }}" method="POST">
            @csrf
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="book" class="col-sm-6 control-label">名前</label>
                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-6 control-label">メールアドレス</label>
                    <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-6 control-label"></label>
                    <input type="hidden" name="password" class="form-control" value="{{ Auth::user()->password }}">
                </div>
            </div>
            <div class="col-sm-6">
                <label>アイコン</label>
                  <input type="file" name="item_icon">
            </div>
            <div class="form-row col-md-12">
        <a href="{{ url('passwordform/') }}">パスワードの変更</a>
        </div>
            <!-- 設定 登録ボタン -->
            <div class="form-row col-md-12">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                    Save
                    </button>
                </div>
            </div>
            <div class="form-row col-md-12">
        <a href="{{ url('users/deleteconfirm/') }}">退会はこちら</a>
        </div>
            
            
            
            <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{Auth::user()->id}}">
         <!--/ id値を送信 -->

        </form>
        
    </div>
    
    @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif


    

@endsection