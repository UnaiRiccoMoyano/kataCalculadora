<?php
use App\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    function testEmpiezaPorCero()
    {
        $numeroInicial=0;
        $calculadora=new Calculadora;
        $request=$calculadora->valorInicialEsCero();
        $this->AssertEquals($numeroInicial,$request);
    }
    function testSumaAlNumeroInicial()
    {
        $numeroTotal=6;
        $calculadora=new Calculadora;
        $request=$calculadora->sumar();
        $this->AssertEquals($numeroTotal,$request);
    }
}
?>