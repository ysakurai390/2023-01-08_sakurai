<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
$select = htmlspecialchars($_POST['select'], ENT_QUOTES);
?>
<p>私の名前は、<?php echo $name; ?></p>
<p>ご希望商品は、<?php echo $radio; ?></p>
<p>注文数は、<?php echo $select; ?></p>