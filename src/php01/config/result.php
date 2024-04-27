<?php
if(isset($_POST["submit"])){
    $name = htmlspecialchars($_POST["name"],ENT_QUOTES,"UTF-8");
    $value = htmlspecialchars($_POST["set"],ENT_QUOTES,"UTF-8");
    $OrderNumber = htmlspecialchars($_POST["OrderNumber"],ENT_QUOTES,"UTF-8");
    echo "私の名前は、" . $name . "<br />";
    if($value) {
        echo "ご希望商品は、" .$value . "<br />";
    }
    echo "注文数は、" . $OrderNumber . "<br />";   
}