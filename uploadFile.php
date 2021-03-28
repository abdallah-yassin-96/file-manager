<?php

require('header.php');
require('classes/UserFolder.php');
require_once('classes/File.php');

$user = $_SESSION['user'];
$current_path = $_SESSION['folder_path'];

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    $file_name = $file['name'];

    $new_file = new File($user);
    $new_file->upload($file, $current_path, $file_name);
}
