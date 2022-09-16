<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class = "container">
    <div class="card-body">
        <div class="card-title">
            勤怠登録
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
                    <label for="book" class="col-sm-3 control-label">日付</label>
                    <input type="date" name="item_date" class="form-control" value="{{ old('item_date') }}">
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-3 control-label">勤務開始時間</label>
                    <input type="time" name="item_number" class="form-control" value="{{ old('item_number') }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-3 control-label">勤務終了時間</label>
                    <input type="time" name="item_number2" class="form-control" value="{{ old('item_number2') }}">
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-3 control-label">休憩開始時間</label>
                    <input type="time" name="item_number3" class="form-control" value="{{ old('item_number3') }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-3 control-label">休憩終了時間</label>
                    <input type="time" name="item_number4" class="form-control" value="{{ old('item_number4') }}">
                </div>
            </div>
            
            <div class="col-sm-6">
                <label>ファイル</label>
                  <input type="file" name="item_file">
            </div>

            <!-- 本 登録ボタン -->
            <div class="form-row col-md-12">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                    Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif


    <!-- Book: 既に登録されてる本のリスト -->
     <!-- 現在の本 -->
    @if (count($books) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>日付</th>
                        <th>勤務開始時間</th>
                        <th>勤務終了時間</th>
                        <th>休憩開始時間</th>
                        <th>休憩終了時間</th>
                        <th>ファイル</th>
                        <th>休憩時間</th>
                        <th>実働時間</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $book->item_date }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->item_number }}</div>
                                <div> 
                                <td class="table-text">
                                    <div>{{ $book->item_number2 }}</div>
                                <div>
                                <td class="table-text">
                                    <div>{{ $book->item_number3 }}</div>
                                <div>
                                <td class="table-text">
                                    <div>{{ $book->item_number4 }}</div>
                                <div>
                                <td class="table-text">
                                     <img src="upload/{{$book->item_file}}" width="100">
                                </div>
                                <div>
                                <td class="table-text">
                                     <div>{{ Helper::BreakCalc($book->id) }}</div>
                                </div>
                                <div>
                                <td class="table-text">
                                     <div>{{ Helper::WorkCalc($book->id) }}</div>
                                </div>
                                    
                                </td>
                                <td class="table-text">
                                    
                                <div>
                                

                                <!-- 本: 更新ボタン -->
                                <td>
                                    <form action="{{ url('booksedit/'.$book->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            更新
                                        </button>
                                    </form>
                                </td>

                                <!-- 本: 削除ボタン -->
                                <td>
                                    <form action="{{ url('book/'.$book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                            削除
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                {{ $books->links()}}
            </div>
       </div>
       </div>
    @endif

@endsection