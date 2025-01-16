<?php

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