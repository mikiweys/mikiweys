<?php
require('login.php');
if ($_SESSION['rol'] != '3'){
    header('location:../user/registro.php');
}
?>