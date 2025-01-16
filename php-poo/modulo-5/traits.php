<?php

trait Logger 
{
  public function log($message) {
    echo '<br>[log]: ' . $message . '<br>';
    echo 'Datetime: ' . date('Y-m') . '<br>';
  }
}

class User
{
  use Logger;
  public function createUser() {
    echo 'User created';
    $this->log('User created');
  }

  public function loginUser() {
    echo 'User logged in';
    $this->log('User logged in');
  }
}

class File
{
  use Logger;

  public function created() {
    echo 'File created';
    $this->log('File created');
  }

  public function deleted() {
    echo 'file deleted';
    $this->log('File deleted');
  }
}

$user = new User();
$user->createUser();
$user->loginUser();

echo '<br>';

$file = new File();
$file->created();
$file->deleted(); 