<?php

declare(strict_types=1);

namespace Temirkhan\View;

class CollectionView extends AbstractAggregateView
{
    /**
     * @var string
     */
    private $elementViewName;

    /**
     * Constructor
     *
     * @param ViewFactory $viewFactory
     * @param string      $elementViewName
     */
    public function __construct(ViewFactory $viewFactory, string $elementViewName)
    {
        parent::__construct($viewFactory);

        $this->elementViewName = $elementViewName;
    }

    public function getView($context)
    {
        if (!is_iterable($context)) {
            return null;
        }

        $view = [];
        foreach ($context as $element) {
            $view[] = $this->createView($this->elementViewName, $element);
        }

        return $view;
    }
}
