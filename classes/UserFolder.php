<?php

class UserFolder
{
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function createUserFolder($folderName)
    {
        $userEmail = $this->user['email'];
        $dir = "../directories/{$userEmail}/{$folderName}";
        if (file_exists($dir)) {
            echo 'file exist';
        } else {
            mkdir($dir, 0, true);
        }
    }

    public function createInnerFolder($folderName)
    {
        $userEmail = $this->user->email;
        $dir = "directories/{$userEmail}/{$folderName}";
        if (file_exists($dir)) {
            echo 'file exist';
        } else {
            mkdir($dir, 0, true);
        }
    }
}
