
#Larawechat-crypt

基于laravel的微信公众号或第三方平台加密解密工具


##安装

```
composer require larawechat/crypt
```

下载完之后直接配置`config/app.php`的`providers`:

```
\Larawechat\crypt\CryptProvider::class,
```

另外在env文件中有以下配置项必填。

```

WECHAT_APPID=
WECHAT_TOKEN=
WECHAT_AES_KEY=

```