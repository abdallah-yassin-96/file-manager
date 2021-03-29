<?php
require('header.php');
require('classes/UserFolder.php');
$user = $_SESSION['user'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $folder_name = $_POST['folderName'];
    $current_path = $_SESSION['folder_path'];
    $newFolder = new UserFolder($user);
    if ($newFolder->createInnerFolder($folder_name)) {
?>
        <script>
            alert('file exists');
            window.location = "dashboard.php";
        </script>
<?php
    }
}
?>