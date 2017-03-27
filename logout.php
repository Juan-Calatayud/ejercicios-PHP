<?php
session_start();
//borramos la variable:
// unset($_SESSION['username']);
// o la sesión completa:
session_destroy();
header("Location: index.php");