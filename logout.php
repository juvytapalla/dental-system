<?php
require 'config.php';
$_SESSION = [];
session_unset();
session_unset();
header("Location: login.php");
?>