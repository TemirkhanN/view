<?php

declare(strict_types=1);

namespace Temirkhan\View;

abstract class AbstractAggregateView implements ViewInterface
{
    /**
     * @var ViewFactory
     */
    private $viewFactory;

    /**
     * Constructor
     *
     * @param ViewFactory $viewFactory
     */
    public function __construct(ViewFactory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
    }

    final protected function createView(string $name, $data)
    {
        return $this->viewFactory->createView($name, $data);
    }
}
