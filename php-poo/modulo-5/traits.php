<?php

function meu_autoloader($className) {
  include_once('classes/' .  strToLower($className) . '.class.php');
}

spl_autoload_register('meu_autoloader');
trait Logger 
{
  public function log($message) {
    echo '<br>[log]: ' . $message . '<br>';
    echo 'Datetime: ' . date('Y-m') . '<br>';
  }
}

$teste = new Teste();
$teste->teste();
echo '<br>';

$user = new User();
$user->createUser();
$user->loginUser();

echo '<br>';

$file = new File();
$file->created();
$file->deleted(); 