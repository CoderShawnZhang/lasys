<?php
/**
 * 声明一个抽象的时间发生者基类
 */
namespace App\Observer\Mail;
abstract class EventGenerator
{
    private $observers = [];


    //将观察者压入数组
    function addobserver(observer $observer){
        $this->observers[] = $observer;
    }

    function notify(){
        foreach($this->observers as $observer){
            $observer->update(11);
        }
    }
}