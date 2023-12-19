<?php 

include_once("class/Session.php");

$session = new Session();

$session->reset();

header('location:visite.php');