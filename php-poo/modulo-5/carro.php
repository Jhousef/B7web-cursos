<?php

class Car
{
  // Atributos e Métodos
  // Jeito Antigo
  // public string $color;
  // public int $year;
  // public string $model;

  public function __construct(public string $color, public int $year, public string $model, public int $velocidade)
  {

    // $this->color = $color;
    // $this->year = $year;
    // $this->model = $model;
    echo 'Construindo Carro......' . $this->model. '...<br>';
  }

  public function acelerarCarro(){
    echo 'acelerando';
  }

  public function diminuirVelocidade(){
    echo 'diminuindo velocidade';
  }

}

// $color = 'red';
// $year = 2010;
// $model = 'AB';

$car1 = new Car('Yellow', 2010, 'Gol', 80);
$car2 = new Car('Pink', 2002, "Passat", 90);
var_dump($car1);

// $car1->color = 'azul';
// $car1->year = 2012;
// $car1->model = 'ABCD';
// echo 'Car 1: <br>';
// $car1->acelerarCarro();
// echo '<br>';

// $car2 = new Car;
// $car2->color = "verde";
// $car2->year = 2015;
// $car2->model = "EFGD";
// echo 'Car 2: <br>';
// $car2->acelerarCarro();
// echo '<br>';
// $car2->diminuirVelocidade();

// print_r($car1);