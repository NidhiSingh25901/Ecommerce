<?php
require_once 'include/session.php';
session_destroy();
header('Location: login.php');
?>