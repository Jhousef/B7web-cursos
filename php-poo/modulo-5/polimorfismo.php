<?php

abstract class Animal
{
  abstract public function emitirSom();
}

class Cachorro extends Animal
{
  // public $nome = 'Cachorro';

  public function __construct(public string $nome)
  {}

  public function emitirSom()
  {
    return 'au au';
  }
}

class FilaBrasileiro extends Cachorro
{
  // public $nome = 'Fila Brazileiro';
  public $meses = 7;
  
  public function __construct($nome)
  {
    parent::__construct($nome);
  }

  public function emitirSom()
  {
    if($this->meses > 6) {
      return 'Ruf Ruf';
    } else {
      return parent::emitirSom();
    }
    
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

  public function emitirSom()
  {
    return null;
  }

}

function fazerOAnimalEmitirSom($animal)
{
  echo 'O animal '.$animal->nome . ' faz: ' . $animal->emitirSom() . '<br>';
}

// $cachorro = new Cachorro();
// $gato = new Gato();
// $peixe = new Peixe();

// $animais = array($cachorro, $gato, $peixe);

// foreach($animais as $animal) {
//   fazerOAnimalEmitirSom($animal);
// }

$fila = new FilaBrasileiro('Rufos');
fazerOAnimalEmitirSom($fila);