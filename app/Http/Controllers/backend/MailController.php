<?php

namespace App\Http\Controllers\backend;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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
     * 开始监听队列
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $user = User::find(4);

        $this->dispatch(new SendReminderEmail($user));
    }

    public function sendMailTest(){
//        var_dump(123123);die;

        $data = ['email'=>'412906819@qq.com', 'name'=>'张洪波','uid'=>1,];
        Mail::send('backend.mail.reminder', $data, function($message) use($data)
        {
            $message->to('412906819@qq.com', '徐文志')->subject('欢wwwww迎注册我们的网站，请激活您的账号！');
        });
    }
}
