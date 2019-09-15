<?php

declare(strict_types=1);

namespace Temirkhan\View\Exception;

class UnknownViewException extends \Exception
{
    public function __construct(string $viewName)
    {
        $message = sprintf('View "%s" is unknown.', $viewName);

        parent::__construct($message);
    }
}
