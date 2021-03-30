<?php
require_once('UserFolder.php');
$file_name = 'UsersData.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function get_data($user)
    {
        global $file_name;
        $array_data = [];
        if (file_exists($file_name)) {
            $current_data = file_get_contents($file_name);
            $array_data = json_decode($current_data, true);
        }

        $array_data[] = $user;
        return $array_data;
    }

    $user = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    );

    $users = get_data($user);

    if (!file_put_contents("$file_name", json_encode($users))) {
        echo 'There is some error';
    }

    $newFolder = new UserFolder((object)$user);
    $newFolder->create('');

    header('location: ../login.php');
}
