<?php

namespace iboxs\carbon\utils;

trait Sessions
{
    public function AddSession($number=1){
        $time=strtotime($this->time);
        $str='';
        if($number>0){
            $str="+ {$number} minutes";
        } else{
            $str="- {$number} minutes";
        }
        $time=strtotime($str,$time);
        $this->time=date('Y-m-d H:i:s',$time);
        return $this;
    }
}