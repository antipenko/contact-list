<?php
include '/includes/magicquotes.inc.php';

if (isset($_GET['addcontact']))
{
  include 'form.html.php';
  exit();
}

//include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
include '/includes/db.inc.php';
if (isset($_POST['name'], $_POST['surname'], $_POST['birthday'], $_POST['phonenumber']))
{
  try {
    //insert into staff
    $sql = 'INSERT INTO staff SET
    name = :name,
    surname = :surname,
    birthday = :birthday';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['name']);
    $s->bindValue(':surname', $_POST['surname']);
    $s->bindValue(':birthday', $_POST['birthday']);
    $s->execute();

 // $sqlSelect = 'SELECT id FROM staff WHERE name = $_POST['name'] and surname =  $_POST['surname'] ';
 //  $res = $pdo->query($sqlSelect);

    //insert into phone
    $sql = 'INSERT INTO phone SET
    phonenumber = :phonenumber,
    staffid = 4';
    $s = $pdo->prepare($sql);
    $s->bindValue(':phonenumber', $_POST['phonenumber']);
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
