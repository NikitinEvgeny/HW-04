
<?php

$delete = $_POST['delete'] ?? null;
unlink(dirname(__DIR__,1) . DIRECTORY_SEPARATOR .'img' . DIRECTORY_SEPARATOR .$delete);
header('Location:../index.php');
