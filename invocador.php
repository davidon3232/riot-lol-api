<?php include('config.php'); ?>
<html>
    <head>
        <title>Invocador</title>
    </head>
    <body>
        <h1>invocador</h1>
        <?php 
         $urlAmigavel = new UrlAmigavel();
         var_dump($urlAmigavel->getParameter(2));die; ?>
    </body>
</html>
