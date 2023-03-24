<html lang="en">
<?php
include './includes/header.php';
include './includes/db.php.ini';

ini_set("display_errors", 0);

$sql = "SELECT id, name, brand, variant, color, price, inventory FROM socks";
$result = $conn->query($sql);
?>
  <div class="product-listing">
    <?php
      while($row = $result->fetch_assoc()) {
        ?>
          <div class="product-line">
            <span class="favourite" style="color: <?=$row['color']?>"><i class="fas fa-star"></i></span>
            <h2><?=$row['name']?> <small>(<?=$row['variant']?>)</small></h2>
            <a href="/details.php?id=<?=$row['id']?>"><button class="btn">Details</button></a>
          </div>
        <?
      }
    ?>
  </div>
<?php
$conn->close();
include './includes/footer.php'
?>
</html>
