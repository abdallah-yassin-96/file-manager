<?php

class UserFolder
{
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function create($folderName)
    {
        $username = $this->user->email;
        $dir = "directories/{$username}/{$folderName}";
        if (file_exists($dir)) {
            return 1;
        } else {
            mkdir($dir, 0, true);
            return 0;
        }
    }
}
