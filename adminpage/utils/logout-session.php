<?php
session_start();
unset($_SESSION["email"]);

 header('Location: ../view/index.php');
?>