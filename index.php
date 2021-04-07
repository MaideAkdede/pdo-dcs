<?php
require('./configs/config.php');
require('./utils/dbaccess.php');
require('./models/user.php');

$connection = getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = find($connection, $id);
    $view = 'user.php';
} else {
    $users = all($connection);
    $view = 'users.php';
}
require("./views/{$view}");
