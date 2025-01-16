<?php
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