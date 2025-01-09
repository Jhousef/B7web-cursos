<?php

class Calculadora {

  private const PI = 3.14;
  public const VERSION = '1.0.0';

  // Métodos estáticos
  public static function areaCirculo(float $raio)
  {
    // Area = PI * raio * raio;
    // PI = 3.14;
    return self::PI * $raio * $raio . '<br>';

    // This - se refere a instacia da classe;
    // Self - se refere a classe em si (Calculadora)
  }
}

$area = Calculadora::areaCirculo(5);
echo $area;

echo Calculadora::VERSION;