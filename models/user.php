<?php
function all(PDO $connection): array
{
    $usersRequest = 'SELECT * FROM users';
    $pdoSt = $connection->query($usersRequest);

    return $pdoSt->fetchAll();
}

function find(PDO $connection, string $id): stdClass
{
    $userRequest = 'SELECT * FROM users WHERE id = :id';
    $pdoSt = $connection->prepare($userRequest);
    $pdoSt->execute([':id' => $id]);

    return $pdoSt->fetch();

}