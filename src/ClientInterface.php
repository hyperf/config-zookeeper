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

namespace Hyperf\ConfigZookeeper;

interface ClientInterface
{
    /**
     * Pull the config values from configuration center, and then update the Config values.
     */
    public function pull(): array;
}
