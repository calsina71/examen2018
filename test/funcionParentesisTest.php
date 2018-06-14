<?php

require_once "src\Expresiones.php";
use PHPUnit\Framework\TestCase;
use lib\utils\Expresiones;

class Funciones_Expresiones_Test extends TestCase{
    //Abertura y cierre de parentesis consecutivos
    public function test_1_SecuenciaParentesisBalanceada(){
        $a = "()()()";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertTrue($resultado);
    }

    //Todos los parentesis abiertos, secierran
    public function test_2_SecuenciaParentesisBalanceada(){
        $a = "(()())";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertTrue($resultado);
    }

    //Abertura inicial de todos los parentesis y cierre al final
    public function test_3_SecuenciaParentesisBalanceada(){
        $a = "((()))";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertTrue($resultado);
    }

    //Tiene un parentesis cerrado antes de ser abierto
    public function test_4_SecuenciaParentesisBalanceada(){
        $a = "())(()";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertFalse($resultado);
    }

    //Un parentesis queda abierto al final
    public function test_5_SecuenciaParentesisBalanceada(){
        $a = "(()))(";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertFalse($resultado);
    }

    //Empieza por un parentesis cerrado
    public function test_6_SecuenciaParentesisBalanceada(){
        $a = ")(()()";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertFalse($resultado);
    }

    //Hay más paréntesis abiertos que cerrados
    public function test_7_SecuenciaParentesisBalanceada(){
        $a = "((())";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertFalse($resultado);
    }

    //Hay más paréntesis cerrados que abiertos
    public function test_8_SecuenciaParentesisBalanceada(){
        $a = "(()))";
        $resultado = Expresiones::secuenciaParentesisBalanceada($a);
        $this->assertFalse($resultado);
    }
}
?>
