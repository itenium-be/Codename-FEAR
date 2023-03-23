<html lang="en">
<?php
include './includes/header.php';
include './includes/db.php.ini';
?>
  <div class="product-listing">
    <div class="product">
      <div class="product-image">
        <img src="/sock-images/socks-<?=$row['brand']?>-<?=$row['variant']?>.jpg" />
      </div>
      <div class="product-info">
        <h1><?=$row['name']?></h1>
        <div>
          <?=$row['inventory']?> in stock. FREE Shipping!
        </div>
        <div>
          Order now for only €<?=$row['price']?>
        </div>
        <div class="color-box" style="background-color: <?=$row['color']?>"></div>
      </div>
    </div>
  </div>
<?php
$conn->close();
include './includes/footer.php'
?>
</html>
