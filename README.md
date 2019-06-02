# think-extend-demo for ThinkPHP5.1

## 安装

> composer require topthink/think-queue

## 配置

> 配置文件位于 `config/queue.php`

### 公共配置

```
[
    'connector'=>'sync' //驱动类型，可选择 sync(默认):同步执行，database:数据库驱动,redis:Redis驱动,topthink:Topthink驱动
                   //或其他自定义的完整的类名
]
```
