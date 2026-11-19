<?php

$tentativa = 1;

$num1 = readline("Escolha o primeiro numero do intervalo: ");

print("\n");

$num2 = readline("Escolha o segundo numero do intervalo: ");

print("\n");

$num_rand = mt_rand($num1, $num2);

do {
    $guess = readline("Informe um numero: ");
    if ($guess == $num_rand) {
        print("\nvoce ganhou!!!\n");

        print("\nvoce tentou $tentativa vezes\n");
    } else {
        print("\nvoce perdeu...\n");

        if ($guess < $num_rand) {

            print("\nSeu chute foi baixo.\n\n");

        } else{
            print("\nSeu chute foi alto.\n\n");
        } 
    }

    $tentativa ++;

} while ($guess != $num_rand);


