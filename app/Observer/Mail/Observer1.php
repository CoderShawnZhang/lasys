<?php
/**
 * 观察者
 */
namespace App\Observer\Mail;
class Observer1 implements observer
{
    //观察者要做的事情
    public function update($message)
    {
        echo $message;
    }
}