<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\ConfigZookeeper;

use Hyperf\ConfigCenter\Contract\PipeMessageInterface;

class PipeMessage implements PipeMessageInterface
{
    /**
     * @var array
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data ?? [];
    }
}
