<?php

class UserFolder
{
    private $user;
    private const ROOT_DIRECTORY = "C:\\xampp\\htdocs\\new-task";


    public function __construct($user)
    {
        $this->user = $user;
    }

    public function create($folderName)
    {
        $dir = $this->getPath($folderName);
        if (file_exists($dir)) {
            echo 'file exist';
        } else {
            mkdir($dir, "0775", true);
        }
    }

    public function delete($folderName)
    {
        $dir = $this->getPath($folderName);
        if (is_dir($dir)) {
            rmdir($dir);
            header("location: {$dir}");
        } else {
            return "error";
        }
    }

    public function readFolder($folder)
    {
    }

    private function getPath($folderName)
    {
        $userEmail = $this->user->email;
        return self::ROOT_DIRECTORY . "\\directories\\" . $userEmail . "\\" . $folderName;
    }
}
