<?php

trait Logger 
{
  public function log($message) {
    echo '<br>[log]: ' . $message . '<br>';
    echo 'Datetime: ' . date('Y-m') . '<br>';
  }
}