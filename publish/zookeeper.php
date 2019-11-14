<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

return [
    'enable' => false,
    'interval' => 5,
    'server' => env('ZOOKEEPER_SERVER', '127.0.0.1:2181'),
    'path' => env('ZOOKEEPER_CONFIG_PATH', '/conf'),
];
