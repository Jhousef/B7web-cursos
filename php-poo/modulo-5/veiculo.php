<?php

class Veiculo {

  public function __construct(public string $marca, public string $modelo)
  {

  }
  public function mover()
  {
    echo 'se movendo... <br>';
  }

  public function parar()
  {
    echo 'parando... <br>';
  }
}

class Carro extends Veiculo{
  public function __construct(public int $portas)
  {

  }

  public function abrirPortas()
  {
    echo 'Abrindo as ' . $this->portas . ' portas. <br>';
  }
}

class moto extends Veiculo{
  // public function __construct(public string $)
  // {
    
  // }

  public function empinar()
  {
    echo 'empinando... <br>';
  }


}

echo 'carro <br>';
$carro = new Carro(3);
$carro->abrirPortas();
$carro->parar();


echo 'moto <hr>';

$moto = new Moto('honda', '160');
echo 'moto <br>';
$moto->mover();
$moto->parar();
$moto->empinar();
