<?php


namespace App\Shapes;


class Square extends Shape
{

    public function __construct(Point $position, string $color)
    {
        $this->position = $position;
        $this->color = $color;
    }

}