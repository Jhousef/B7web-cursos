<?php

function processarPagamento(MetodoPagamento $formaDePagamento, float $valorPagamento) {
  echo 'Processando pagamento via ' . $formaDePagamento->getName() . ' com valor de R$ ' . $valorPagamento . '<br>';
  if($formaDePagamento->pagar($valorPagamento)) {
    echo 'Pagamento realizado com sucesso';
  } else {
    echo 'Pagamento não realizado';
  }
}