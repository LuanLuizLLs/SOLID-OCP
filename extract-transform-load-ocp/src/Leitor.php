<?php

namespace YesOCP;

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

  public function lerArquivo(): array {
    $caminho = $this->getDiretorio().'/'.$this->getArquivo();
    $extensao = explode('.', $this->getArquivo());

    $classe = '\YesOCP\components\\'.ucfirst($extensao[1]);

    return call_user_func_array(
      [
        new $classe,
        'lerArquivo'
      ],
      [
        $caminho
      ],
    );  
  }

}