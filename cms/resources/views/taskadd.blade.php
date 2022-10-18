@extends('layouts.app')
@section('content')

<!-- Bootstrapの定形コード… -->
    <div class = "container">
    <div class="card-body">
        <div class="card-title">
            タスク
        </div>
        
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <form enctype="multipart/form-data" action="{{ url('tasks') }}"
        method="POST" class="form-horizontal">
            @csrf
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="task" class="col-sm-3 control-label">タイトル</label>
                    <input type="text" name="task_title" class="form-control" value="{{ old('task_title') }}">
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="task" class="col-sm-3 control-label">詳細</label>
                    <textarea type="text" name="task_text" class="form-control" value="{{ old('task_text') }}"></textarea>
            </div>
            

            <!-- タスク 登録ボタン -->
            <div class="form-row col-md-12">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                    Save
                    </button>
                </div>
            </div>
        </form>
        
        @if (session('message'))
            <div class="alert alert-success">
                 {{ session('message') }}
            </div>
        @endif
        
@endsection