<?php

class Conta {
  
  public function __construct(private int $saldo, private bool $chequeEspecial = false)
  {
    
  }
  
  public function sacar(int $valor)
  {

    if($valor > $this->saldo && $this->chequeEspecial == false) {
      echo 'O valor a sacar é maior que o saldo atual! <br>';
      return false;
    }

    if($valor > $this->saldo + 100 && $this->chequeEspecial = true) {
      echo 'Você não pode sacar mais do que o valor do saldo + cheque especial (100) <br>';
      return false;
    }

    echo 'Você sacou: '.$valor . '<br>';
    $this->saldo -= $valor;
  }

  public function depositar(int $valor)
  {

    if($valor>100) {
      echo 'deposito maior que R$ 100, não permitido! <br>';
      return false;
    }

    echo 'Você depositou: ' . $valor . '<br>';
    $this->saldo += $valor;
  }

  public function verSaldo()
  {
    return $this->saldo;
  }

}

$conta1 = new Conta(500, false);
echo 'Saldo inicial: ' . $conta1->verSaldo() . '<br>';
$conta1->depositar(100);
$conta1->sacar(700);

echo 'Saldo atual: ' . $conta1->verSaldo() . '<br>';

echo '<hr>';
$conta2 = new Conta(500, true);
echo 'Saldo inicial: ' . $conta2->verSaldo() . '<br>';
$conta2->depositar(100);
$conta2->sacar(700);
// var_dump($conta2);

echo 'Saldo atual: ' . $conta2->verSaldo() . '<br>';
