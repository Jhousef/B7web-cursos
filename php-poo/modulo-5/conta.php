<?php

class Conta {
  
  public function __construct(private int $saldo)
  {
    
  }

  public function sacar(int $valor)
  {

    if($this->saldo < $valor) {
      return 'O valor a sacar é maior que o saldo atual! <br>';
    }

    echo 'Você sacou: '.$valor . '<br>';
    $this->saldo -= $valor;
  }

  public function depositar(int $valor)
  {

    if($valor>100) {
      return 'deposito maior que R$ 100, não permitido! <br>';
    }

    echo 'Você depositou: ' . $valor . '<br>';
    $this->saldo += $valor;
  }

  public function verSaldo()
  {
    return $this->saldo;
  }

}

$conta1 = new Conta(50);
echo $conta1->depositar(100);
echo $conta1->depositar(50);
echo $conta1->depositar(100);
echo $conta1->depositar(80);
echo $conta1->depositar(90);
echo $conta1->sacar(470);

echo 'Saldo atual: ' . $conta1->verSaldo() . '<br>';
