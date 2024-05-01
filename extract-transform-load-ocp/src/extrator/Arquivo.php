<?php 

namespace ExtractTransformLoadOcp\extrator;

class Arquivo {

  private $dados = array();

  public function getDados(): array {
    return $this->dados;
  }

  public function setDados(string $nome, string $cpf, string $email): void {
    array_push($this->dados, [
      'nome' => iconv('iso-8859-1', 'utf-8', $nome),
      'cpf' => $cpf,
      'email' => $email
    ]);
  }
  
}