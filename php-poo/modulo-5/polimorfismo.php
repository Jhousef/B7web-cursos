<?php

class Animal
{
  public function emitirSom()
  {
    return null;
  }
}

class Cachorro extends Animal
{
  public $nome = 'Cachorro';
  public function emitirSom()
  {
    return 'au au';
  }
}

class Gato extends Animal
{
  public $nome = 'Gato';
  public function emitirSom()
  {
    return 'miau';
  }
}

class Peixe extends Animal
{
  public $nome = 'Peixe';

}

function fazerOAnimalEmitirSom($animal)
{
  echo 'O animal '.$animal->nome . ' faz: ' . $animal->emitirSom() . '<br>';
}

$cachorro = new Cachorro();
$gato = new Gato();
$peixe = new Peixe();

$animais = array($cachorro, $gato, $peixe);

foreach($animais as $animal) {
  fazerOAnimalEmitirSom($animal);
}

// echo 'CACHORRO <br>';
// $cachorro = new Cachorro();
// echo $cachorro->emitirSom();

// echo 'GATO <br>';
// $gato = new Gato();
// echo $gato->emitirSom();

// echo 'PEIXE <br>';
// $peixe = new Peixe();
// var_dump($peixe->emitirSom());