<?php

declare(strict_types=1);

namespace Temirkhan\View\Exception;

use Temirkhan\View\ViewInterface;

class DuplicateViewException extends \Exception
{
    public function __construct(ViewInterface $view, string $viewName)
    {
        $message = sprintf('Duplicate view "%s" of type "%s" registered.', $viewName, \get_class($view));

        parent::__construct($message);
    }
}
