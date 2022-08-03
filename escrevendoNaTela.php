<?php 

//Métodos de escrever na tela
echo "Olá Mundo!" .PHP_EOL;
print "Olá Mundo!".PHP_EOL;
fwrite(STDOUT, 'Olá Mundo!'.PHP_EOL);
fwrite(STDERR, 'Olá Mundo!'.PHP_EOL);


$cursos = fopen('zip://lista-cursos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);