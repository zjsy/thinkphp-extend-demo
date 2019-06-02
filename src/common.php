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
    'command:test'              => \young\demo\CommandTest::class, //我觉得这样写好些,可以指向到类本身
//    'command:test'              => "\young\demo\CommandTest",
]);

if (!function_exists('demoTest')) {


    function demoTest(String $myName)
    {
        echo $myName;
    }
}
