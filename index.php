<?php
include '/includes/magicquotes.inc.php';

if (isset($_GET['addcontact']))
{
  include 'form.html.php';
  exit();
}

include '/includes/db.inc.php';
if (isset($_POST['name'], $_POST['surname'], $_POST['birthday'], $_POST['phonenumber']))
{
  try {

    $name =$pdo->quote($_POST['name']);
    $surname =$pdo->quote($_POST['surname']);
    $birthday = $pdo->quote($_POST['birthday']);
    $s = $pdo->prepare("INSERT INTO staff (name, surname, birthday) values ($name, $surname, $birthday)");
    $s->execute();

    $lastId = $pdo->lastInsertId();
    $sql = 'INSERT INTO phone SET
              phonenumber = :phonenumber,
              staffid =  :staffid';
    $s = $pdo->prepare($sql);
    $s->bindValue(':phonenumber', $_POST['phonenumber']);
    $s->bindValue(':staffid', $lastId);
    $s->execute();
  } catch (PDOException $e) {
    $error = 'Error adding submitted contact: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }
  header('Location: .');
  exit();
}

include '/includes/db.inc.php';
try
{
  $sql = 'SELECT staff.id, name, surname, birthday, phonenumber FROM staff  INNER JOIN phone ON staffid = staff.id ';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Ошибка вывода контактов: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $contacts[] = array(
    'id' => $row['id'],
    'name' => $row['name'],
    'surname' => $row['surname'],
    'birthday' => $row['birthday'],
    'phonenumber' => $row['phonenumber']
    );
}

include 'contacts.html.php';
