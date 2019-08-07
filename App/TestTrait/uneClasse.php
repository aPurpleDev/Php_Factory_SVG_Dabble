<?php


namespace App\TestTrait;


class uneClasse
{

    public $string;

    /**
     * uneClasse constructor.
     * @param $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    use untrait;

    public function __toString()
    {
        return $this->string;
    }

}