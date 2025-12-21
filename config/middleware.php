<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use app\middleware\MySqlCacheMiddleware;
use app\middleware\MenuMiddleware;
use app\middleware\MinifyMiddleware;
use app\middleware\RouteNameMiddleware;
use app\middleware\VerifyAPIToken;


return [
    '' => [
        MySqlCacheMiddleware::class,
        MenuMiddleware::class,
        RouteNameMiddleware::class,
        MinifyMiddleware::class,
    ],
    'api' => [
        VerifyAPIToken::class,
    ],
];