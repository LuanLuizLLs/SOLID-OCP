<?php

namespace NoOCP;

class Leitor {

  private $diretorio;
  private $arquivo;

  public function getDiretorio(): string {
    return $this->diretorio;
  }

  public function getArquivo(): string {
    return $this->arquivo;
  }

  public function setDiretorio(string $diretorio): void {
    $this->diretorio = $diretorio;
  }

  public function setArquivo(string $arquivo): void {
    $this->arquivo = $arquivo;
  }

  public function lerArquivo(): Arquivo {
    $caminho = $this->getDiretorio().'/'.$this->getArquivo();
    $extensao = explode('.', $this->getArquivo());

    $arquivo = new Arquivo();

    if ($extensao[1] === 'csv') {
      $arquivo->lerArquivoCSV($caminho);
    } else if ($extensao[1] === 'txt') {
      $arquivo->lerArquivoTXT($caminho);
    }
    
    return $arquivo;
  }

}