<?php

/*
 * This file is part of avokadogames/auth-discord.
 *
 * Copyright (c) 2019 FriendsOfFlarum.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace AvokadoGames\AuthDiscord;

use Flarum\Extend;
use AvokadoGames\AuthDiscord\Controllers\DiscordAuthController;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
    new Extend\Locales(__DIR__.'/resources/locale'),
    (new Extend\Routes('forum'))
        ->get('/auth/discord', 'auth.discord', DiscordAuthController::class),
];
