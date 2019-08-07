<?php


namespace App\HomeAutoload;


class A
{

    public $string;

    /**
     * A constructor.
     * @param $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * @return mixed
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param mixed $string
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    public function __toString()
    {
        return $this->string;
    }
}