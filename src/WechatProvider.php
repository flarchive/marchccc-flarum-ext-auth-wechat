<?php

/*
 * This file is part of luuhai48/oauth-likedin.
 *
 * Copyright (c) 2020 Luuhai48.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Marchccc\OauthWechat;

use Illuminate\Support\ServiceProvider;


class WechatProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->tag([
            Providers\Wechat::class,
        ], 'fof-oauth.providers');
    }
}