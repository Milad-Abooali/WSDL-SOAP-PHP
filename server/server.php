<?php

  function test($a,$b)
  {
    return $a+$b;
  }
  
  function ItemQuery($item)
  {
    if ($item>5) {
      $output['count'] = 10;
      $output['size'] = 11;
    } else {
      $output['count'] = 20;
      $output['size'] = 22;
    }
    return $output;
  }

  $opts = Array();
  $opts['compression'] = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP;
  $server = new SoapServer('demo.wsdl', $opts);
  $server->addFunction('ItemQuery');
  $server->addFunction('test');
  $server->handle();