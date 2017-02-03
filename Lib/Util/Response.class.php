<?php

class Response {

  public function __construct($status, $info, $data)
  {
    $this->status = $status;
    $this->info = $info;
    $this->data = $data;
  }

  public function json()
  {
      echo json_encode(array(
        'status' => $this->status,
        'info' => $this->info,
        'data' => $this->data,
      ));
  }
}
