<?php

class ApiAction extends Action {

  public function _initialize()
  {
    $this->config = C("APIS");
    $this->datas = array();
    $this->channelId = '';
    $this->url = '';
    $this->response = null;
    $this->result = array();
  }

  public function _before_index()
  {
    $this->channelId = $this->_request('channelId', '', 'test');
    $requestName = $this->config[$this->channelId]['request'];
    import("@.Util." . $requestName);
    $request = new $requestName($_POST);
    $result = $request->check($this->config[$this->channelId]['fields']);
    if ($result === 1) {
      import('@.Util.Response');
      Response::json('error', '', array());exit;
    } else {
      $this->url = $this->config[$channelId]['url'];
      $this->datas = $result;
    }

  }

  public function index()
  {
    echo "Data:" . json_encode();
    echo "Url:" . $this->url;
    echo 'post datas to the url';

    try {
      // post the data to remote server api
      $this->result = array();
      $responseName = $this->config[$this->channelId]['response'];
      import("@.Util." . $responseName);
      $this->response = new $responseName('success', '', $this->result);
    } catch (Exception $e) {
      import('@.Util.Response');
      $this->response = new Response('error', '', new stdClass());
      $this->response->json();exit;
    }
  }

  public function _after_index()
  {
    $this->response->json();
    exit;
  }

}
