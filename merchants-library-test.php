<html>
  <head>
    <title>PS PHP Library Test</title>
    <?php require 'ps-v3-library.php' ?>
  </head>
  <body>
    <h3>
      <center>
        Simple test of PopShops V3 API PHP Library
      </center>
    </h3>
    <hr>
    <h4>
      Logging information (off by default):
    </h4>
    <?php
      function printbr($s) {
        print($s . '<br>');
      }
      $tmp_api_key = 'd1lg0my9c6y3j5iv5vkc6ayrd';
      $tmp_catalog_id = 'dp4rtmme6tbhugpv6i59yiqmr';
      $api = new PsApiCall($tmp_api_key, $tmp_catalog_id, true);
      $api->call('merchants', array());
    ?>
    <hr>
    <h4>
      Demo of library capabilities (look at the PHP source to see what is going on):
    </h4>
    <?php      
    foreach ($api->resource('merchants') as $merchant) {
      printbr('The merchant "' . $merchant->attr('name') . '" has the Merchant Type: ' . $merchant->resource('merchant_type')->attr('name'));
    }
    ?>
  </body>
</html>
