<?php

include_once 'Shape.php';

class AbstractShape implements Shape
{
    protected bool $isSelected;

    public function __construct()
    {
        $this->isSelected = false;
    }

    function select()
    {
        $this->isSelected = true;
    }

    function unSelect()
    {
        $this->isSelected = false;
    }

    function isSelected(): bool
    {
        return $this->isSelected;
    }
}