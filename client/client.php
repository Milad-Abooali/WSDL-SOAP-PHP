<?php
   $client = new SoapClient('http://localhost/my-app/wsdl/demo.wsdl');  // Set WSDL URL
   $res    = $client->ItemQuery('4');
   $count  = $res->count;
   $size   = $res->size;
   print "count=$count, size=$size\n";
