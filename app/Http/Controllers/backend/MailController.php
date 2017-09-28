<?php

namespace App\Http\Controllers\backend;

use App\Models\Job;
use App\Models\User;
use App\Observer\Mail\Event;
use App\Observer\Mail\Observer1;
use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * 列出所有队列中的邮件
     *
     * @return \Illuminate\Http\Response
     */
    public function queuelist(){
        $joblist = Job::all();
//        var_dump($joblist);die;
//        return view('backend.mail.index',compact('joblist'));
        return view('backend.mail.index',compact('joblist'));
    }
    /**
     * 写入队列
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * 发送提醒邮件到指定用户
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendReminderEmail()
    {
//        $user = User::find(4);

        $event = new Event();
        $event->addobserver(new Observer1());


//        $this->dispatch(new SendReminderEmail($user));
//        return redirect()->Route('backend.mail.queuelist');
    }

    public function sendMailTest(){
//        var_dump(123123);die;

        $data = ['email'=>'412906819@qq.com', 'name'=>'张洪波','uid'=>1,];
        Mail::send('backend.mail.reminder', $data, function($message) use($data)
        {
            $message->to('412906819@qq.com', '徐文志')->subject('欢wwwww迎注册我们的网站，请激活您的账号！');
        });
    }

    /**
     * 开始监听队列
     */
    public function artisanHandle(){
        $event = new Event();
        Artisan::call('queue:listen',[]);
    }
}
