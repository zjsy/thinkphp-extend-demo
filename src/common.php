<?php
/**
 * Created by PhpStorm.
 * User: Yonug<820355121@qq.com>
 * Date: 2019/6/2
 * Time: 12:48
 */

// 这个文件是通过autoload files 方式引入的,所以会在执行composer load的时候就会被加载,
// 所以这里可以写一些要执行的代码,常见的有在此处注册command命令,定义全局的助手函数等等
\think\Console::addDefaultCommands([
    'help'              => "young\demo\CommandTest::class",
]);

if (!function_exists('queue')) {

    /**
     * 添加到队列
     * @param        $job
     * @param string $data
     * @param int    $delay
     * @param null   $queue
     */
    function queue($job, $data = '', $delay = 0, $queue = null)
    {
        if ($delay > 0) {
            \think\Queue::later($delay, $job, $data, $queue);
        } else {
            \think\Queue::push($job, $data, $queue);
        }
    }
}
