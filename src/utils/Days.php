<?php

namespace iboxs\carbon\utils;

trait Month
{
    public function AddMonths($years=1){
        $time=strtotime($this->time);
        $str='';
        if($years>0){
            $str="+ {$years} months";
        } else{
            $str="- {$years} months";
        }
        $time=strtotime($str,$time);
        $this->time=date('Y-m-d H:i:s',$time);
        return $this;
    }
}