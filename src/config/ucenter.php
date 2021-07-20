<?php

/**
 * 为了方便，直接修改以下带【*】的配置即可
 */

return [
    'url'            => env('UC_URL', ''),  // 这里是你的api的前缀，一般直接留空。
    'connect'        => env('UC_CONNECT', null), // 【*】mysql或者null，mysql直连数据库，null则请求接口
    'dbhost'         => env('UC_DBHOST', 'localhost'),
    'dbuser'         => env('UC_DBUSER', 'root'),
    'dbpw'           => env('UC_DBPW', 'root'),
    'dbname'         => env('UC_DBNAME', 'ucenter'),
    'dbcharset'      => env('UC_DBCHARSET', 'utf8'),
    'dbtablepre'     => env('UC_DBTABLEPRE', '`ucenter`.uc_'),
    'dbconnect'      => env('UC_DBCONNECT', '0'),
    'key'            => env('UC_KEY', 'asflkhKFJHGH5648asdfasdfhj9845613asdf'),  // 【*】UCenter提供的通信密钥
    'api'            => env('UC_API', 'http://www.xxx.cn/uc_server'),         // 【*】UCenter提供的服务端地址
    'ip'             => env('UC_IP', ''),
    'charset'        => env('UC_CHARSET', 'utf-8'),
    'appid'          => env('UC_APPID', '1'),   // 【*】UCenter匹配的应用编号
    'ppp'            => env('UC_PPP', '20'),

    // 这里是uc_server调用你的程序的接口，配置成uc的话，将会和前面的UC_URL配置一起形成这样的地址 url/api/uc
    'apifilename'    => env('UC_APIFILENAME', 'uc'),

    // 这里如果要异步登陆，可以直接继承这个类实现其中的方法，也可以创建app/Service/UCenter.php(文件放哪里都可以，这里只是推荐) 实现该类实现的接口【*】
    'service'        => env('UC_SERVICE', 'Douxz\UCenter\Services\Api'),
];
