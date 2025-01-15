<?php

class Paypal
{
  public function pagar($valor)
  {
    echo 'Pagamento via Paypal no valor de R$ ' .$valor;
    return true;
  }
}

class CreditCard
{
  public function pagar($valor)
  {
    echo 'Pagamento via cartão de credito no valor de R$ ' .$valor;
  }
}

// Nosso sistema -> imutavel
$pagamento = new CreditCard();
$pagamento->pagar(100);


// Nosso sistema usando Interface

// Eu quero...

// 1. Criar uma instancia de pagamento
// 2. O usúario escolhe o método de pagamento
// 3. O sistema vai chamar o método Pagar daquele método de pagamento