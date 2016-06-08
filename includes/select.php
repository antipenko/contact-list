<?php
// iclude 'db.inc.php';

$pdo = new PDO('mysql:host=localhost;dbname=contacts', 'contacts', 'fcsd1936');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');

$id = $_POST['id'];

//$sql = 'SELECT  name FROM staff where id="$_POST[id]" ';
// $sql = 'SELECT  name FROM staff where id=3 ';

$result = $pdo->query('SELECT * FROM staff WHERE id = ' . $pdo->quote($id));
$row = $result->fetch(PDO::FETCH_ASSOC);
// foreach ($result as $row);
echo json_encode($row);

