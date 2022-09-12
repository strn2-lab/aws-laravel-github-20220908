<?php

namespace App\Helpers;
use App\Book;   //Bookモデルを使えるようにする


class Helper
{
    public static function xxx($i)
    {
        // 処理
        
        $work_start = Book::where('id', $i)->value('item_number');
        $work_end = Book::where('id', $i)->value('item_number2');
        
        $break_start = Book::where('id', $i)->value('item_number3');
        $break_end = Book::where('id', $i)->value('item_number4');
        
        $work_start_format = strtotime($work_start);
        $work_end_format = strtotime($work_end);
        $break_start_format = strtotime($break_start);
        $break_end_format = strtotime($break_end);
        
        
        // return($work_start_format);
        
        // 時間計算が動いているかの確認
        // $start_time_x = strtotime("09:00:00"); 
        // $end_time_x = strtotime("19:00:00");

        $work_time_stump = $work_end_format - $work_start_format; 
        $break_time_stump = $break_start_format - $break_end_format;
    
        $actual_time_stump = $work_time_stump - $break_time_stump;
        
        $worktime = date("H:i:s", $actual_time_stump);
        return $worktime;
    }
}