<?php
//Tela de saida da tela do Painel
session_start();
session_destroy();

header ("Location: ../view/indexWeb.html");
exit;
?>