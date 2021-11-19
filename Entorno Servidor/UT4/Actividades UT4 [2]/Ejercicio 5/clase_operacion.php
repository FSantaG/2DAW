<?php
class Operacion
{
    private $operador;
    private $ope1;
    private $ope2;
    function __construct($o1, $o2, $signo)
    {
        $this->operador = $signo;
        $this->ope1 = $o1;
        $this->ope2 = $o2;
    }
    function calculo()
    {
        $r = 0;
        switch ($this->operador) {
            case '+':
                $r = $this->ope1 + $this->ope2;
                break;
            case '-':
                $r = $this->ope1 - $this->ope2;
                break;
            case '*':
                $r = $this->ope1 * $this->ope2;
                break;
            case '/':
                $r = $this->ope1 / $this->ope2;
                break;
        }
        return "El resultado es " . $r;
    }
}
