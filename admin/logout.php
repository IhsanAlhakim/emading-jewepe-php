<?php
// Hapus semua session dan cookie yang tersimpan
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie("id", "", time() - 3600);
setcookie("username", "", time() - 3600);

header("Location: ../index.php");
exit;
