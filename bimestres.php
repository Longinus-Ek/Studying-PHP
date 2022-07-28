<?php
$notasBimestre1 = [
    'Ana'=> 10,
    'joão' => 6,
    'carlos' => 9,
    'pedro' => 6,
    'jonny' => 9,
   
];
$notasBimestre2 = [
    'Ana'=> 10,
    'joão' => 5,
    'carlos' => 9,
    
];

//var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); //Compara duas arrays pelo valor da chave
// var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // Compara duas arrays pelo valor e pela chave

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));

