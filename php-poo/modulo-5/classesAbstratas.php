<?php

abstract class CalculadoraDeAreas
{
  // public function __construct(public int $lado, public int $altura, public int $base)
  // {}

  abstract public function realizarCalculo();
}

class Quadrado extends CalculadoraDeAreas
{
  public function __construct(public int $lado)
  {}

  public function realizarCalculo()
  {
    return $this->lado * $this->lado;
  }

}

class Retangulo extends CalculadoraDeAreas
{
  public function __construct(public int $base, public int $altura)
  {}

  public function realizarCalculo()
  {
    return $this->base *  $this->altura;
  }
}

class Triangulo extends CalculadoraDeAreas
{

  public function __construct(public int $base, public int $altura)
  {}

  public function realizarCalculo()
  {
    return $this->base * $this->altura / 2;
  }
}

$quadrado = new Quadrado(10);
echo 'A área do quadrado é: ' . $quadrado->realizarCalculo() . '<br>';

$retangulo = new Retangulo(10, 2);
echo 'A área do retangulo é: ' . $retangulo->realizarCalculo() . '<br>';

$triangulo = new Triangulo(10 ,2);
echo 'A área do triangulo é: ' . $triangulo->realizarCalculo() . '<br>';