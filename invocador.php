<?php
include('inc/header.php');
$a = new Summoner();
var_dump($a->getSummoner());
?>
<h1>invocador</h1>
<?php
$urlAmigavel = new UrlAmigavel();
var_dump($urlAmigavel->getParameter(2));
die;
?>
<?php include('inc/footer.php') ?>

