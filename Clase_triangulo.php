<?php
class Triangulo
{

    private $cateto1;
    private $cateto2;
    private $hipotenusa;


    function __construct($a, $b, $c)
    {
        $this->cateto1 = $a;
        $this->cateto2 = $b;
        $this->hipotenusa = $c;
    }
    function tipoTriangulo()
    {
        if (pow($this->hipotenusa, 2) == (pow($this->cateto1, 2) + pow($this->cateto2, 2))) {
            return "rectangulo";
        } elseif (pow($this->hipotenusa, 2) > (pow($this->cateto1, 2) + pow($this->cateto2, 2))) {
            return "obtusangulo";
        } else {
            return "acutangulo";
        }
}
}



?>