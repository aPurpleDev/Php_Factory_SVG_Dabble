<?php


namespace App\Shapes;


abstract class Shape implements IShape
{
    protected $position;
    protected $color;

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
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

    public function getOriginAbcisse()
    {
        return $this->point->x;
    }

    public function getOriginOrdonnee()
    {
        return $this->point->y;
    }

    public function __toString()
    {
        return "La classe instanciée est " . get_class($this) . ". La couleur de la forme est " . $this->color . " les coordonnées des points sont " . $this->position . ".";
    }

}