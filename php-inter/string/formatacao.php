<?php
/*
$valor1 = 4395;
$valor2 = 20.99;
$valor3 = -4395;
$caractere = 67; // O decimal 67 da tabela ASCII equivale ao caractere C

printf("%b \n", $valor1); // Representação binária

printf("%c \n", $caractere); // Imprime o caractere C ( igual a função chr() )

printf("%e \n", $valor1); // Notação científica

printf("%d \n", $valor2); // Parte inteira do valor (o valor é truncado)

printf("%+d \n", $valor1); // Valor inteiro positivo (força o valor a ter o sinal de +)

printf("%-d \n", $valor3); // Valor inteiro negativo (força o valor a ter o sinal de -)


$valor = 20.8891;
printf('%f', $valor);

$valor = 20.8891;
printf('%.1f', $valor); // 20.9


$valor1 = 47.1;
$valor2 = 24.1;
$resultado = $valor1 + $valor2;

// Sem formatação
echo $resultado . "<br>"; // Retorna: 71.2

// Com formatação
echo sprintf("%.2f", $resultado); // 71.20


$s = 'TreinaWeb';

printf("[%s]\n", $s); // Impressão padrão da string
printf("[% 15s]\n", $s); // alinhamento à direita com espaços.
printf("[% - 15s]\n", $s); // alinhamento à esquerda com espaços.

printf("%'*10s \n", "Web");   // Retorna: *******Web
printf("%'*-10s", "Web");       // Retorna: Web*******

printf("%'@10s \n", "Web");   // Retorna: @@@@@@@Web
printf("%'@-10s", "Web");       // Retorna: Web@@@@@@@
*/

$mes = 9;
$dia = 7;
$ano = 1985;

// Formata com zeros à esquerda
echo sprintf("Data: %02d/%02d/%04d.", $mes, $dia, $ano);

$mes = 9;
$dia = 7;
$ano = 85;

// Imprime a data
echo sprintf("Data: %02d/%02d/%04d.", $mes, $dia, $ano);


$string = 'Sou jovem e tenho %2$u anos. Sou bebê e tenho %1$u anos.';
printf($string, 2, 25);

