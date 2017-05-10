<?php

namespace Larawechat\crypt;

use Illuminate\Support\ServiceProvider;

class CryptProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(WXBizMsgCrypt::class, function () {
            return new WXBizMsgCrypt(env('WECHAT_TOKEN'), env('WECHAT_AES_KEY'), env('WECHAT_APPID'));
        });
    }
}
