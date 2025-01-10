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

class Aves extends Animal
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

class Pombinho extends Aves
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

$pombinho = new Pombinho();
$pombinho->respirar();
$pombinho->mover();
$pombinho->comerPaozinho();
$pombinho->colocarOvos();