<?php
/**
 * 邮件管理  控件 类
 */

namespace App\Presenters;

class MailPresenter extends CommonPresenter
{
    /**
     * 按钮组
     */
    public function getHandleParams(){
        return [
            [
                'route' => 'backend.mail.sendReminderEmail',
                'icon'  => 'plus',
                'class' => 'success',
                'title' => '写入队列',
            ],
            [
                'route' => 'backend.mail.artisanHandle',
                'icon'  => 'plus',
                'class' => 'success',
                'title' => '启动监听'
            ]
        ];
    }
}