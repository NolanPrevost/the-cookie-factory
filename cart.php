<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php 
if (empty($_SESSION['login'])){
    header ('Location: login.php');
    exit();
} 
?>
<section class="cookies container-fluid">
    <div class="row">

<?php 
if(!empty($_SESSION['articles'])) {
    foreach ($_SESSION['articles'] as $id) {
?> 
        <li><?= $catalog[$id]['name']; } }?> </li>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
