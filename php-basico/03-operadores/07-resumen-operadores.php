<?php
/*
Resumen de operadores en PHP
*/

echo "<h3>Operadores aritméticos</h3>";
echo '<pre>
+  Suma: 2 + 3 = '.(2+3).'
-  Resta: 5 - 2 = '.(5-2).'
*  Multiplicación: 4 * 2 = '.(4*2).'
/  División: 10 / 2 = '.(10/2).'
%  Módulo: 7 % 3 = '.(7%3).'
** Exponente: 2 ** 3 = '.(2**3).'
</pre>';

echo "<h3>Operadores de asignación</h3>";
echo '<pre>
=   Asignación: $a = 5
+=  Suma y asigna: $a += 2 // $a = $a + 2
-=  Resta y asigna: $a -= 2
*=  Multiplica y asigna: $a *= 2
/=  Divide y asigna: $a /= 2
%=  Módulo y asigna: $a %= 2
</pre>';

echo "<h3>Operadores de comparación</h3>";
echo '<pre>
==  Igual: 2 == "2" → '.var_export(2=="2", true).'
=== Idéntico: 2 === "2" → '.var_export(2==="2", true).'
!=  Diferente: 2 != 3 → '.var_export(2!=3, true).'
!== No idéntico: 2 !== "2" → '.var_export(2!=="2", true).'
<   Menor que: 2 < 3 → '.var_export(2<3, true).'
>   Mayor que: 3 > 2 → '.var_export(3>2, true).'
<=  Menor o igual: 2 <= 2 → '.var_export(2<=2, true).'
>=  Mayor o igual: 3 >= 2 → '.var_export(3>=2, true).'
<=> Nave espacial: 2 <=> 3 → '.(2<=>3).'
</pre>';

echo "<h3>Operadores lógicos</h3>";
echo '<pre>
&&  AND: true && false → '.var_export(true&&false, true).'
||  OR: true || false → '.var_export(true||false, true).'
!   NOT: !true → '.var_export(!true, true).'
xor XOR: true xor false → '.var_export(true xor false, true).'
</pre>';

echo "<h3>Operadores varios</h3>";
echo '<pre>
.   Concatenación: "Hola" . " Mundo" = '.("Hola"." Mundo").'
?:  Ternario: 5 > 3 ? "sí" : "no" → '.(5>3?"sí":"no").'
??  Fusión null: null ?? "valor" → '.(null??"valor").'
</pre>'; 