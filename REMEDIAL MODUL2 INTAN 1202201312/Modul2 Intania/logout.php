<?php
session_start();
session_destroy();

header("Location: Intania_Index.php");
?>