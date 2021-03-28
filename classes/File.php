<?php
class File
{
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function upload($file, $current_path, $file_name)
    {
        $file_extention = explode('.', $file_name);
        $file_extention = strtolower(end($file_extention));

        $allowed_extentions = ['txt', 'png', 'jpg', 'jpeg', 'webp', 'pdf', 'mp3', 'mp4'];

        if (in_array($file_extention, $allowed_extentions)) {
            if ($file['error'] === 0) {
                if ($file['size'] <= 2000000) {
                    $file_path = $current_path . '/' . $file_name;
                    if (move_uploaded_file($file['tmp_name'], $file_path)) {
                        header("location: dashboard.php");
                    } else {
                        echo 'upload error!';
                    }
                } else {
                    echo "File size is more than 2 MB";
                }
            }
        } else {
            echo "file extetion is not allowed";
        }

        header('../dashboard.php');
    }
}
