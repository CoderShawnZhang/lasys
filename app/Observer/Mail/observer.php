<?php
/**
 * 观察者接口
 */
namespace App\Observer\Mail;
interface observer
{
    function update($message);
}