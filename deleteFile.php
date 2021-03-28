<?php
require('header.php');
require('classes/UserFolder.php');
$user = $_SESSION['user'];
$curret_path = $_SESSION['folder_path'];
if (isset($_POST['deleteFile'])) {
    $fileName = $_POST['fileName'];
    if (is_dir($curret_path . '/' . $fileName)) {
        rmdir($curret_path . '/' . $fileName);
        header("location: dashboard.php?success");
    } else if (!unlink($curret_path . '/' . $fileName)) {
        echo "Error deleting this file";
    }
}
