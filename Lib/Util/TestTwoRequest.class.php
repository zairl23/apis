<?php

import('@.Util.Request');

class TestTwoRequest extends Request{
  public function __construct($datas)
  {
    $this->datas = $datas;
  }

  public function check($fields)
  {
    # check the sign here
    $datas  = array();

    foreach ($fields as $field) {
      $datas[$field] = $this->datas[$field];
    }

    echo 'check here for Test Two Request';
  }
}
