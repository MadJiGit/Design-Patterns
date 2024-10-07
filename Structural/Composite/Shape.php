<?php

interface Shape
{
    function select();
    function unSelect();
    function isSelected(): bool;
}