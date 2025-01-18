<?php

function meu_autoloader($className) {
  $diretorios = ['classes/', 'traits/'];

  foreach ($diretorios as $diretorio){

    $diretorio = strtolower($diretorio);
    $className = strtolower($className);

    if(file_exists($diretorio . $className . '.class.php')){
      include_once($diretorio . $className . '.class.php');
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