<?php
$dsn = 'mysql:dbname=calanques;host=db';
$user = 'user';
$password = '.password';

try {
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
echo 'done';
}
catch(PDOException $exception) {
    echo $exception->getMessage();
}
