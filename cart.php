<?php
require 'inc/head.php';
require 'inc/data/products.php';


    if (empty($_SESSION['loginname'])) {
        header('Location: login.php');
    }
?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <ul>
      <?php foreach ($_SESSION['cookie'] as $key => $quantity) : ?>
          <li><?= $catalog[$key]['name'] ?></li>
      <?= "Contenu du panier : " .  $quantity ?>
      <?php endforeach;?>

        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
