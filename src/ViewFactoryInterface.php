<?php

declare(strict_types=1);

namespace Temirkhan\View;

interface ViewFactoryInterface
{
    /**
     * @param string $viewName
     * @param mixed  $data
     *
     * @return array|string|float|int|null
     *
     * @throws Exception\UnknownViewException
     */
    public function createView(string $viewName, $data);
}
