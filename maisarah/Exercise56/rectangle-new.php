<?php
/**
 * with type hints (data properties, function args and return) from php7, new constructor feature from php8
 */
class Rectangle
{
    /* skip the instance variable declaration */
    /* input param */
    public function __construct(
        private float $width,
        private float $height,
        private string $color,
    ) {

        /* do something */
    }

    /* findArea & findPerimeter */
    /* it declares with return type  : float */
    public function findArea(): float
    {
        return $this->width * $this->height;
    }

    public function findPerimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }

    /* getset functions */
    public function getWidth(): float
    {
        return $this->width;
    }

    /* a function has a return type of void 
    it will still return a value, this value is always null.*/
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}