<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\User;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReminderEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //
        $this->user = $user;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        //
//        var_dump(12312);die;
//        $data = ['email'=>'412906819@qq.com', 'name'=>'张洪波','uid'=>1,];
//        Mail::send('backend.mail.reminder', $data, function($message) use($data)
//        {
//            $message->to('412906819@qq.com', '徐文志')->subject('111欢迎注册我们的网站，请激活您的账号！');
//        });
        $user = $this->user;
        $mailer->send('backend.mail.reminder',['user'=>111],function($message) use ($user){
            $message->to('412906819@qq.com')->subject('测试邮件队列');
        });
    }
}
