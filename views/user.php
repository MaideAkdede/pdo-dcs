<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $user->fullname; ?></title>
</head>
<body>
<h1><?= $user->fullname; ?></h1>
<p><?= $user->email; ?></p>
<div>
    <a href="index.php">retourner à la liste des utilisateurs</a>
</div>
</body>
</html>