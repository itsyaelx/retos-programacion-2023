<?php

$hostname = 'mysql-5707.dinaserver.com';
$port = 3306;
$user = 'mouredev_read';
$password = 'mouredev_pass';
$database = 'moure_test';

$db = new mysqli("$hostname", "$user", "$password", "$database", $port);
$result = $db->query("SELECT * FROM challenges");
$results = $result->fetch_all(MYSQLI_ASSOC);
echo "<pre>";
var_dump($results);
echo "</pre>";

$db->close();
