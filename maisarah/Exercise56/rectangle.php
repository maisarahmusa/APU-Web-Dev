<?php
    
class Rectangle 
{
    private int $width;
    private float $height;
    private float $color;

    /* constructor function */
    public function __construct($width, $height, $color)
    {
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setColor($color);

    }

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

    public function __toString()
    {
        return "width = {$this->getWidth()} <br> height = {$this->getWidth()} <br>
        color = {$this->getColor()} <br> Area = {$this->findArea()} 
        <br> Perimeter = {$this->findPerimeter()}";
    }
}

