<?php

declare(strict_types=1);

namespace Temirkhan\View;

interface ViewInterface
{
    /**
     * @param mixed $context
     *
     * @return string|int|float|array|null
     */
    public function getView($context);
}
