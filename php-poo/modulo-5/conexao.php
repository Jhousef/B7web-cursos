<?php

class Conexao {
  private string $conexao;

  public function __construct()
  {
    // Conectar-se ao banco de dados;

    $this->conexao = 'Conectado ao banco de dados';
    echo 'Conexao com o banco de dados criada <br>';
  }

  // VAI DESTRUIR A CLASSE
  public function __destruct()
  {
    $this->conexao = '';
    echo 'Conexao encerrada com o banco de dados <br>';
  }

  public function consulta()
  {
    echo 'Realizada consulta no banco de dados <br>';
  }

}

$conexao = new Conexao();
$conexao->consulta();

// OUTRA FORMA DE DESTRUIR A CLASSE
unset($conexao);
echo 'Encerrando Script...';