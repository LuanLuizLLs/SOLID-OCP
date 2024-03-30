<?php 

require __DIR__.'/vendor/autoload.php';

use App\Leitor;

echo '<h3>Lendo arquivo CSV</h3>';

$leitor_csv = new Leitor();
$leitor_csv->setDiretorio(__DIR__.'/assets');
$leitor_csv->setArquivo('dados.csv');

echo '<pre>';
print_r($leitor_csv->lerArquivo());
echo '</pre>';

echo '<hr />';

echo '<h3>Lendo arquivo TXT</h3>';

$leitor_txt = new Leitor();
$leitor_txt->setDiretorio(__DIR__.'/assets');
$leitor_txt->setArquivo('dados.txt');

echo '<pre>';
print_r($leitor_txt->lerArquivo());
echo '</pre>';
