
# Larawechat-crypt

基于laravel的微信公众号或第三方平台加密解密工具


## 安装

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

具体使用场景参考[微信消息加解密接入指引](https://open.weixin.qq.com/cgi-bin/showdocument?action=dir_list&amp;t=resource/res_list&amp;verify=1&amp;id=open1419318479&amp;lang=zh_CN)