<?php

class Animal 
{
  public function respirar()
  {
    echo 'Respirando... <br>';
  }

  public function mover()
  {
    echo 'Movendo... <br>';
  }
}

class Mamifero extends Animal
{
  public function amamentar()
  {
    echo 'Amamentando... <br>';
  }

}

class Cachorro extends Mamifero
{
  public function abanarORabo()
  {
    echo 'abanando o rabo... <br>';
  }

  public function latir()
  {
    echo 'latindo <br>';
  }
}

class Gato extends Mamifero
{
  public function abanarORabo()
  {
    echo 'abanando o rabo... <br>';
  }

  public function miar()
  {
    echo 'miando... <br>';
  }
}

class Ave extends Animal
{
  public function colocarOvos()
  {
    echo 'colocando ovos <br>';
  }

  public function voar()
  {
    echo 'voando <br>';
  }
}

class Pombinho extends Ave
{
  public function comerPaozinho()
  {
    echo 'comendo paozinho... <br>';
  }
}

$cachorro = new Cachorro();
$cachorro->latir();
$cachorro->mover();
$cachorro->respirar();
$cachorro->amamentar();

echo '<br> <hr>  <br>';

$gato = new Gato();
$gato->miar();
$gato->mover();
$gato->respirar();
$gato->amamentar();

echo '<br> <hr>  <br>';

$pombinho = new Pombinho();
$pombinho->respirar();
$pombinho->mover();
$pombinho->comerPaozinho();
$pombinho->colocarOvos();