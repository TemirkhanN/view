<?php

declare(strict_types=1);

namespace Temirkhan\View;

class ViewFactory implements ViewFactoryInterface
{
    /**
     * @var ViewInterface[]
     */
    private $views;

    public function __construct()
    {
        $this->views = [];
    }

    public function registerView(string $name, ViewInterface $view): void
    {
        if (array_key_exists($name, $this->views)) {
            throw new Exception\DuplicateViewException($view, $name);
        }

        $this->views[$name] = $view;
    }

    public function createView(string $viewName, $data)
    {
        if (!array_key_exists($viewName, $this->views)) {
            throw new Exception\UnknownViewException($viewName);
        }

        return $this->views[$viewName]->getView($data);
    }
}
