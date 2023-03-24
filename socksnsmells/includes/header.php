<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Socks'n'Smells</title>
  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" />
  <link href="styles.css" rel="stylesheet" />
</head>
<body>
  <div class="nav-bar">
    <h1><a href="/">Socks'n'Smells - Our Store</a></h1>
    <!-- <a class="cart" href="/cart">0<i class="fas fa-shopping-cart"></i></a> -->
  </div>

  <!-- <script>
    document.write('<script src="http://' + (location.host || "localhost").split(":")[0] + ':35729/livereload.js?snipver=1"></' + "script>");
  </script> -->

<?php
error_reporting(E_ALL);

function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] please contact your administrator";
}

set_error_handler("customError");


?>
