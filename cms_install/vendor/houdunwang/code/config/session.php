<?php
return [
    /*
    |--------------------------------------------------------------------------
    | 引擎
    |--------------------------------------------------------------------------
    | 系统支持file,mysql,memcache,redis等常见的SESSION处理引擎
    */
    'driver'   => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | ID
    |--------------------------------------------------------------------------
    | 保存在客户端COOKIE中的sessid名称
    */
    'name'     => 'HDPHPID',

    /*
    |--------------------------------------------------------------------------
    | 域名
    |--------------------------------------------------------------------------
    | 用于设置可以使用SESSION数据的域名
    */
    'domain'   => '',

    /*
    |--------------------------------------------------------------------------
    | 过期时间
    |--------------------------------------------------------------------------
    | SESSION数据有效期
    | 设置0即为会话状态, 关闭浏览器后SESSION失效
    */
    'expire'   => 0,

    /*
    |--------------------------------------------------------------------------
    | 目录
    |--------------------------------------------------------------------------
    | 当引擎为FILE类型时即以文件形式处理SESSION,
    | 通过设置下面的path值来定义保存SESSION的目录
    */
    'file'     => [
        'path' => 'storage/session',
    ],
];