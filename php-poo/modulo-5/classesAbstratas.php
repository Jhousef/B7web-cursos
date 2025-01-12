<?php

abstract class CalculadoraDeAreas
{
  public function __construct(public int $lado, public int $altura, public int $base)
  {}

  abstract public function realizarCalculo();

}

class Quadrado extends CalculadoraDeAreas
{
  public function __construct($lado, $altura, $base)
  {
    parent::__construct($lado, $altura, $base);
  }

  public function realizarCalculo()
  {

  }

}

class Retangulo extends CalculadoraDeAreas
{
  public function realizarCalculo()
  {
    
  }
}

class Triangulo extends CalculadoraDeAreas
{
  public function realizarCalculo()
  {
    
  }
}

function CalculadoraDeArea()
{
  
}