## Ucenter Client For Laravel5.8+

说明：本项目在 https://github.com/noxue/ucenter 项目的基础上做了修改。

运行命令：
~~~
composer require douxz/ucenter
~~~

安装完后，在 `app/config/app.php` 文件中找到 `providers` 键，

~~~
'providers' => [

    Douxz\UCenter\UCenterServiceProvider::class

]
~~~

找到 `aliases` 键，

~~~
'aliases' => [

    'UCenter' => Douxz\UCenter\Facades\UCenter::class,

]
~~~

## 配置文件
运行以下命令发布配置文件

创建 `config/ucenter.php` 写入以下内容：

```
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

```

## 路由

在`routes/api.php`中写入:

`use Douxz\UCenter\Facades\UCenter;`

`Route::any(config('ucenter.url').'/api/'.config('ucenter.apifilename'), '\Douxz\UCenter\Controllers\ApiController@run');`

或

`UCenter::routes();`

这个会添加一个api地址，用于同步登陆和退出

## 使用
例如：获取用户名为admin的信息
~~~
$result = Ucenter::uc_get_user('admin');
var_dump($result);
~~~


## 联系我
有问题，请提交issue
