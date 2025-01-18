<?php

function meu_autoloader($className) {
  $diretorios = ['classes/', 'traits/'];

  foreach ($diretorios as $diretorio){
    if(file_exists($diretorio . strTolower($className) . '.class.php')){
      include_once($diretorio . strTolower($className) . '.class.php');
      break;
    }
  }
}

spl_autoload_register('meu_autoloader');

// $teste = new Teste();
// $teste->teste();
// echo '<br>';

$user = new User();
$user->createUser();
$user->loginUser();

echo '<br>';

$file = new File();
$file->created();
$file->deleted();