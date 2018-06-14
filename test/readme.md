Tabla Test de PHPUnit
---------------------

| ENTRADA    | SALIDA ESPERADA  | DESCRIPCIÓN   |
|-----------------------------------------------|
|"()()()"|TRUE| Abertura y cierre de parentesis consecutivos|
|"(()())"|TRUE| Todos los parentesis abiertos, secierran |
|"((()))"|TRUE| Abertura inicial de todos los parentesis y cierre al final |
|"())(()"|FALSE| Tiene un parentesis cerrado antes de ser abierto |
|"(()))("|FALSE| Un parentesis queda abierto al final |
|")(()()"|FALSE| Empieza por un parentesis cerrado |
|"((())"|FALSE| Hay más paréntesis abiertos que cerrados |
|"(()))"|FALSE| Hay más paréntesis cerrados que abiertos |

By: Carlos Alsina Iglesias
