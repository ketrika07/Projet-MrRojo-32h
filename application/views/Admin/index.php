<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= site_url("admin/logIn") ?>" method="post">
        <p>
            email :
            <input type="email" name="email" value="Doe@gmail.com">
        </p>
        <p>mdp :
            <input type="password" name="mdp" value="r00t">
        </p>
        <input type="submit" value="Log In">
    </form>

</body>

</html>