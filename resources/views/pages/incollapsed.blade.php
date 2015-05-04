<?php if ($_SERVER['REQUEST_URI'] == '/cart'): ?>
@include('pages.cart')
<?php endif ?>

<?php if ($_SERVER['REQUEST_URI'] == '/checkout'): ?>
@include('pages.checkout')
<?php endif ?>
