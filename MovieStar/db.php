<?php

$db_name = "movie_star"; // Certifique-se de que o nome do banco está correto e maiúscula/minúscula igual ao docker-compose
$db_host = "mysql"; // Nome do serviço no docker-compose
$db_user = "root";
$db_pass = "root";

$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
