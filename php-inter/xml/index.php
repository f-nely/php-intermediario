<?php

$alunos = [
    [
        'id' => 1,
        'nome' => 'Pedro',
        'cidade' => 'São Paulo'
    ],
    [
        'id' => 2,
        'nome' => 'Ana',
        'cidade' => 'São Paulo'
    ],
    [
        'id' => 3,
        'nome' => 'Carla',
        'cidade' => 'Curitiba'
    ],
    [
        'id' => 4,
        'nome' => 'Marcos',
        'cidade' => 'Recife'
    ]
];

$dom = new DOMDocument('1.0', 'utf-8');
$treinaweb = $dom->createElement('treinaweb');

foreach ($alunos as $aluno) {
    settype($aluno, 'object');
    $alunotag = $dom->createElement('aluno');
    $alunotag->setAttribute('id', $aluno->id);
    $alunotag->appendChild($dom->createElement('nome', $aluno->nome));
    $alunotag->appendChild($dom->createElement('cidade', $aluno->cidade));
    $treinaweb->appendChild($alunotag);
}

$dom->appendChild($treinaweb);
$dom->formatOutput = true;
echo $dom->save('students.xml');