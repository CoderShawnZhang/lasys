<?php
/**
 * 自定义Artisan 命令
 */
namespace App\Console\Commands;


use Illuminate\Console\Command;
class Test extends Command
{
    /**
     * 命令的名称及用法
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * 命令行的概述
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';

    /**
     * 滴灌电子邮件服务
     *
     * @var
     */
    protected $drip;

    /**
     * 创建新的命令实例
     *
     * Test constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *运行命令
     */
    public function handle()
    {
        $t = $this->ask('hello');
        $this->info($t.'===');
    }
}