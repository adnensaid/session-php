<?php 
require 'inc/head.php'; 
require 'inc/data/products.php';
if ($_SESSION['loginname']) {
?>
<section class="cookies container-fluid">
    <div class="row">
       <h4> shopping cart items : </h4>
        <?php foreach ($_SESSION['cart'] as $item) { ?>
            <p> <?= $item ?> </p>
        <?php } ?>
    </div>
</section>
<?php
}
else {
    header('Location: /login.php');
    exit();
}
print_r($cart);
?>

<?php require 'inc/foot.php'; ?>
