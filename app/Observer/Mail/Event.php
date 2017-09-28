<?php
/**
 * 具体事件类
 */
namespace App\Observer\Mail;
class Event extends EventGenerator
{
    function trigger(){
        $this->notify();
    }
}