<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
    
    echo "私の名前は、" . $name . '<br />';
    echo "ご希望の商品は、" . $product . '<br />';
    echo "注文数は、" . $number . '<br />';
