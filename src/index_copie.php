<h1>Ceci est mon fichier php.</h1>

<?php
	echo "test";

try {
        $dsn = 'mysql:host=mysql;dbname=wordpress;charset=utf8;port=3306';
        $pdo = new PDO($dsn, 'wordpress', 'wordpress');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

 ?>