{"filter":false,"title":"booksedit.blade.php","tooltip":"/cms/resources/views/booksedit.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":53,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('content')","<div class=\"row container\">","    <div class=\"col-md-12\">","    @include('common.errors')","    <form action=\"{{ url('books/update') }}\" method=\"POST\">","","        <!-- item_name -->","        <div class=\"form-group\">","           <label for=\"item_date\">日付</label>","           <input type=\"date\" name=\"item_date\" class=\"form-control\" value=\"{{$book->item_date}}\">","        </div>","        <!--/ item_name -->","        ","        <!-- item_number -->","        <div class=\"form-group\">","           <label for=\"item_number\">勤務開始時間</label>","        <input type=\"time\" name=\"item_number\" class=\"form-control\" value=\"{{$book->item_number}}\">","        </div>","        <div class=\"form-group\">","           <label for=\"item_number2\">勤務終了時間</label>","        <input type=\"time\" name=\"item_number2\" class=\"form-control\" value=\"{{$book->item_number2}}\">","        </div>","        <div class=\"form-group\">","           <label for=\"item_number3\">休憩開始時間</label>","        <input type=\"time\" name=\"item_number3\" class=\"form-control\" value=\"{{$book->item_number3}}\">","        </div>","        <div class=\"form-group\">","           <label for=\"item_number4\">休憩終了時間</label>","        <input type=\"time\" name=\"item_number4\" class=\"form-control\" value=\"{{$book->item_number4}}\">","        </div>","        <!--/ item_number -->","        ","        <!-- Saveボタン/Backボタン -->","        <div class=\"well well-sm\">","            <button type=\"submit\" class=\"btn btn-primary\">Save</button>","            <a class=\"btn btn-link pull-right\" href=\"{{ url('/') }}\">","                Back","            </a>","        </div>","        <!--/ Saveボタン/Backボタン -->","         ","         <!-- id値を送信 -->","         <input type=\"hidden\" name=\"id\" value=\"{{$book->id}}\">","         <!--/ id値を送信 -->","         ","         <!-- CSRF -->","         @csrf","         <!--/ CSRF -->","         ","    </form>","    </div>","</div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":309,"scrollleft":0,"selection":{"start":{"row":37,"column":20},"end":{"row":37,"column":20},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":99,"mode":"ace/mode/php_laravel_blade"}},"timestamp":1662685193710,"hash":"c7f8476c3dc2ab727ea01709931f657eee5e4f73"}