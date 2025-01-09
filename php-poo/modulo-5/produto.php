<?php

// ENCAPSULAMENTO
// GETTERS E SETTERS.

class Produto {

  public function __construct(private string $nome, private float $preco)
  {

  }

  public function getPreco() {
    // GET = LEITURA
    if(is_float($this->preco)){
      return $this->preco . '<br>';
    } else {
      return 0.00;
    }
    return $this->preco . '<br>';
  }

  public function setPreco(float $preco) {
    // SET = MODIFICAR
    $this->preco = $preco . '<br>';
  }

  public function getNome()
  {
    if(is_string($this->nome)){
      return $this->nome;
    } else {
      return;
    }
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

}

$produto1 = new Produto('Cadeira', 500.00);
var_dump($produto1->getPreco());
var_dump($produto1->getNome());
// var_dump($produto1->setPreco(25));
