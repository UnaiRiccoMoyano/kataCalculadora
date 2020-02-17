<?php

namespace App;
class Calculadora
{
    public $numeroParaSumar=6;

     function valorInicialEsCero()
     {
         $valorInicial=0;
         return($valorInicial);
     }
     function sumar()
     {
         $valorInicial=$this->valorInicialEsCero();
         $total=$this->numeroParaSumar+$valorInicial;
         return($total);
     }
}


?>