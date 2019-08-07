<?php


namespace App\Shapes;


class SVGFactory
{

    protected $shapeType;
    protected $shapeRender;

    /**
     * SVGFactory constructor.
     * @param $shapeType
     */
    public function __construct(Shape $shapeType)
    {

        $shapeRender;

        switch(get_class($shapeType))
        {
            case "App\Shapes\Circle":
                //$this->shapeRender = "<svg viewBox=\"0 0 100 100\" > <circle style=stroke: none\; fill:\"##6495ED\;\" cx=\"25\" cy=\"25\" r=\"25\"/> </svg>";
                $this->shapeRender =  "<svg height=\"100\" width=\"100\"><circle cx=\"" . $shapeType->getPosition()->getX() . "\"cy=\"". $shapeType->getPosition()->getY() . "\" r=\"40\" stroke=\"black\" stroke-width=\"3\" fill=\"". $shapeType->getColor() ."\"/></svg>";
                break;

            case "App\Shapes\Square":
                $this->shapeRender = "<svg>  <rect cx=\"" . $shapeType->getPosition()->getX() . "\"cy=\"". $shapeType->getPosition()->getY() ."\" stroke=\"black\" stroke-width=\"3\" width=\"100\" fill=\"" . $shapeType->getColor() . "\"height=\"100\"/></svg>";
                break;
        }
    }

    /**
     * @return mixed
     */
    public function getShapeType()
    {
        return $this->shapeType;
    }

    /**
     * @param mixed $shapeType
     */
    public function setShapeType($shapeType)
    {
        $this->shapeType = $shapeType;
    }

    /**
     * @return mixed
     */
    public function getShapeRender()
    {
        return $this->shapeRender;
    }

    /**
     * @param mixed $shapeRender
     */
    public function setShapeRender($shapeRender)
    {
        $this->shapeRender = $shapeRender;
    }
}