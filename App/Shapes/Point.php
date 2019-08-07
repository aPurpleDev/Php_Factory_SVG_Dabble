<?php


namespace App\Shapes;


class Point
{
    protected $x;
    protected $y;

    /**
     * Point constructor.
     * @param float $x
     * @param float $y
     */
    public function __construct(float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function __toString()
    {
        return $this->x . " et " . $this->y;
    }

    /**
     * Point constructor.
     */
}