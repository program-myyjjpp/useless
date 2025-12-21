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

use support\view\Blade;

return [
    'handler' => Blade::class,  // 设置 Blade 为视图引擎
    'options' => [
        'view_path' => base_path() . '/view',
        'cache_path' => runtime_path() . '/views',
    ],
];