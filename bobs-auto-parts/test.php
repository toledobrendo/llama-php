<?php
require_once('model/product.php');
?>

<?php
include("view-comp/header.php")
?>
<?php
$oil = new Product();
$oil->name = 'Oil';
echo '<br/>product'.$oil->name;

?>
<?php
include("view-comp/footer.php")
?>