<?php

class Car
{
  // Atributos e Métodos
  public string $color;
  public int $year;
  public string $model;

  public function acelerarCarro(){
    echo 'acelerando';
  }

  public function diminuirVelocidade(){
    echo 'diminuindo velocidade';
  }

}

$car1 = new Car;
$car1->color = 'azul';
$car1->year = 2012;
$car1->model = 'ABCD';
echo 'Car 1: <br>';
$car1->acelerarCarro();
echo '<br>';

$car2 = new Car;
$car2->color = "verde";
$car2->year = 2015;
$car2->model = "EFGD";
echo 'Car 2: <br>';
$car2->acelerarCarro();
echo '<br>';
$car2->diminuirVelocidade();

// print_r($car1);