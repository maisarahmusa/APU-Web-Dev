<?php

// standard coding for class
    
class Rectangle 
{
    /* instance variables with types */
    private float $width;
    private float $height;
    private string $color;

    /* constructor function */
    public function __construct($width, $height, $color)
    {

        /* call the set function */
        /* by setting object data */
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setColor($color);
    }

    /* findArea & findPerimeter */
    /* the result may return any form of return type if types do not declare */
    
    public function findArea()
    {
        return $this->width * $this->height;
    }

    public function findPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    /* format object data into string */
    public function __toString()
    {
        return "Width = {$this->getWidth()} <br> height = {$this->getWidth()} <br>
        Color = {$this->getColor()} <br> Area = {$this->findArea()} 
        <br> Perimeter = {$this->findPerimeter()}";
    }
}

