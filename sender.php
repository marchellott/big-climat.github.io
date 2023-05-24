<?php header("Content-Type: text/html; charset=utf-8");

$name = $_POST['your-name']=trim($_POST['your-name']);
$tel = $_POST['tel'];
$email = $_POST['email'];

$theme = "=?utf-8?b?" . base64_encode('Заказ товара: '.$email) . "?=";

if(($name !="") & ($tel !=""))

    $address = "bigclimat@yandex.ua";
$massage = "Имя: ".$name."\nТелефон: "."+380 ".$tel."\nEmail: ".$email."";
$verify = mail($address, $theme, $massage, "Content-type:text/plain; charset=UTF-8\r\n");

header("Location: ".$_SERVER['HTTP_REFERER']);  exit;
?>
