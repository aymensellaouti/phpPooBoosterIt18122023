<?php 
    include_once 'class/autoloader.php';
    if (isset($_POST['birthday']) && isset($_POST['name'])&& isset($_POST['id'])) {

        $id = htmlspecialchars($_POST['id']);
        $name = htmlspecialchars($_POST['name']);
        $birthday = htmlspecialchars($_POST['birthday']);

        $userRepository = new UserRepository();
        $userRepository->update($id, $name, $birthday);

    } 
    header('location:users.php');
    