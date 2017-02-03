<?php

class ApiAction extends Action {

  public function _before_test()
  {
    echo 'before test';
  }

  public function test()
  {
    echo 'test api';
  }

  public function _after_test()
  {
    echo 'after test';
  }



}
