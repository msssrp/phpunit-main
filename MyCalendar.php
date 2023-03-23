<?php

class MyCalendar
{
    
    public function CheckDayNameOfDate($nday,$nmonth){

        $input_date = $nday."/".$nmonth. "/" ."2023";
        $datetime = DateTime::createFromFormat('d/m/Y', $input_date);
        return $datetime->format('l');
    }
}