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
 
  public function abrirPortas($portas)
  {
    echo 'Abrindo as ' . $portas . ' portas. <br>';
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
$carro = new Carro('Hyundai', 'modelo hyundai');
$carro->abrirPortas(4);
$carro->parar();


echo 'moto <hr>';

echo 'moto <br>';
$moto = new Moto('honda', '160');
$moto->mover();
$moto->parar();
$moto->empinar();
