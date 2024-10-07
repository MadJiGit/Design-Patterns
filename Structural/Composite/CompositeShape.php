<?php

include_once 'AbstractShape.php';

class CompositeShape extends AbstractShape
{
    protected array $children;

    public function __construct(Shape... $children)
    {
        $this->children = $children;
    }

    public function isSelected(): bool
    {
        foreach ($this->children as $child){
            if(!$child->isSelected()){
                return false;
            }
        }

        return true;
    }

    public function select()
    {
        parent::select();
        foreach ($this->children as $child){
            $child->select();
        }
    }

    public function unSelect()
    {
        parent::unSelect();
        foreach ($this->children as $child){
            $child->unSelect();
        }
    }
}