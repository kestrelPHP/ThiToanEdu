<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
session_start(); //inicia a sessão que foi aberta

session_destroy(); //destrui a sessão

session_unset(); //limpa as variaveis globais das sessões

echo "<script>alert('Bạn đã thoát!');top.location.href='index.php';</script>";
?> 