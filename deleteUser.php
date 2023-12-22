<?php
include_once 'class/autoloader.php';
if (isset($_GET['id'])) { 
        $id = $_GET['id'];
        $userRepository = new UserRepository();
        $user = $userRepository->delete($id);
    }

    header('location:users.php');