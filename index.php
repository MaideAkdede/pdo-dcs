<?php
require('./configs/config.php');
require('./utils/dbaccess.php');
$connection = getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $userRequest = 'SELECT * FROM users WHERE id = :id';
    $pdoSt = $connection->prepare($userRequest);
    $pdoSt->execute([':id' => $id]);
    $user = $pdoSt->fetch();
    $view = 'user.php';
} else {
    $usersRequest = 'SELECT * FROM users';
    $pdoSt = $connection->query($usersRequest);
    $users = $pdoSt->fetchAll();
    $view = 'users.php';
}
require("./views/{$view}");
