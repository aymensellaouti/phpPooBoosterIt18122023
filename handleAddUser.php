<?php 
    include_once 'class/autoloader.php';
    if (isset($_POST['birthday']) && isset($_POST['name'])) {

        $name = htmlspecialchars($_POST['name']);
        $birthday = htmlspecialchars($_POST['birthday']);

        $userRepository = new UserRepository();
        $userRepository->create($name, $birthday);

    } 
    header('location:users.php');
    