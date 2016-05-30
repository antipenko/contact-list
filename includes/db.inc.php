<?php try
{
  $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'contacts', 'fcsd1936');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Ошибка подключения к базе данных.';
  include 'error.html.php';
  exit();
}
 ?>
