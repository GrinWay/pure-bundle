<?php

namespace GrinWay;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @final
 */
class PureBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
