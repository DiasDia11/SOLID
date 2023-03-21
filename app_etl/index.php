<?php

require __DIR__."/vendo/autoload.php";

use src\Leitor;

//--------------------------------- TXT
$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.txt');
$leitor->lerArquivo();
$arr_txt = $leitor->lerArquivo();

//--------------------------------- CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$leitorCSV->lerArquivo();
$arr_csv = $leitorCSV->lerArquivo();

//--------------------------------- MERGE entre TXT e CSV
echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';