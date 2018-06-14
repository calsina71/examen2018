<?php
  namespace lib\utils;


  class Expresiones {

    public static function secuenciaParentesisBalanceada($cad){
      $cars = str_split($cad);
      $cont = 0;
      foreach($cars as $c){
        if($c==="(") $cont++;
        if($c===")") $cont--;
        if ($cont<0) return FALSE; // Línea que corrige el problema.
      }
      return ($cont===0);
    }
  }

?>
