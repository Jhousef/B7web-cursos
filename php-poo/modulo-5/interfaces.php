<?php

include('functions.php');
interface MetodoPagamento {
  public function getName():string;
  public function pagar(float $valor):bool;
}

class Paypal implements MetodoPagamento
{
  public function getName():string
  {
    return 'Paypal';
  }
  public function pagar(float $valor):bool
  {
    echo 'Pagamento via Paypal no valor de R$ ' .$valor . '<br>';
    return true;
  }
}

class CreditCard implements MetodoPagamento
{
  public function getName():string
  {
    return 'Cartão de credito';
  }
  public function pagar(float $valor):bool
  {
    echo 'Pagamento via cartão de credito no valor de R$ ' .$valor . '<br>';
    return true;
  }
}

class Pix implements MetodoPagamento
{
  public function getName():string
  {
    return 'Pix';
  }
  private function gerarQrCode(float $valor): string
  {
    echo 'Gerando QR Code para pagamento via Pix no valor de R$ ' .$valor . '<br>';
    return 'QRCODE';
  }
  public function pagar(float $valor):bool
  {
    $qrCode = $this->gerarQrCode($valor);
    echo 'Pagamento via Pix no valor de R$ ' .$valor . '<br>';
    echo 'QR Code: ' .$qrCode . '<br>';
    return true;
  }
}

$metodoPagamentoSelecionadoPeloUsuario = new CreditCard();

//imutavel
processarPagamento($metodoPagamentoSelecionadoPeloUsuario, 100);

// Nosso sistema usando Interface

// Eu quero...

// 1. Criar uma instancia de pagamento
// 2. O usúario escolhe o método de pagamento
// 3. O sistema vai chamar o método Pagar daquele método de pagamento