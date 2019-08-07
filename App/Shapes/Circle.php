<?php


namespace App\Shapes;


class Circle extends Shape
{

    public function __construct(Point $position, string $color)
    {
        $this->position = $position;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return Point
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param Point $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}