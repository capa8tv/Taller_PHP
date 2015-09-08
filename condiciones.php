<?php
$num1=12;
$num2=13;

/**
 * Operadores de Comparación
 * >
 * <
 * >=
 * <=
 * ==
 * === igual exacto
 * != distinto de
 * 
 * Operadores Lógicos
 * 
 * and
 * or
 * 
 * */
if( $num1 === 12 or $num2 ===133 and $num1> 100 )
{
    echo "es igual a 12 mamamamama";
}else
{
    echo "no se cumple";
}
echo "<hr />";
/**
 * control de Flujo
 * */

 
 switch($num1)
 {
    case '13':
        echo "se ejecuta 13";
    break;
    case '14':
        echo "se ejecuta 14";
    break;
    case '15':
        echo "se ejecuta 15";
    break;
    case '16':
        echo "se ejecuta 16";
    break;
    default:
        echo "ninguna condicion se cumple";
    break;
 }










