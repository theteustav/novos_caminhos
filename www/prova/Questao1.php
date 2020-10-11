<?php

// Questão 1
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

// Dado um ano, retorne o século em que ele se encontra.
// O primeiro século se estende do ano 1 até e incluindo o ano 100,
// o segundo segundo século do ano 101 até e incluindo o ano 200,
// e assim sucessivamente.

//Exemplo

//Para $ano = 1905, a saída deve ser
//centuryFromYear(year) = 20;
//Pois year = 1700, a saída deve ser
//centuryFromYear(year) = 17.

//Retorno inteiro
//O número do século em que se encontra o ano.

function centuryFromYear($year)
{
    $century = $year / 100;
    $resto = $year % 100;
    if (($resto) > 0) {
        $century = $century - ($resto / 100) + 1;
    } else {
        $century = $century;
    };
    return "<p>Século $century</p>";
};



echo centuryFromYear(3002);