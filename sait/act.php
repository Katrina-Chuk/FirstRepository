<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg_form";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysql_select_db('reg_form');

if (!$conn) {
   die("Подключение не удалось: " . mysqli_connect_error());
}

$sql = "INSERT INTO reg_data (username, login, email, password, sex, who, text)
VALUES ('".$_POST['username']."','".$_POST['login']."', '".$_POST['email']."','".$_POST['password']."', '".$_POST['sex']."','".$_POST['who']."', '".$_POST['text']."')" ;


if (mysqli_query($conn, $sql)) {
 include('./end_reg.html');
} else {
 echo "Ошибка добавления записи: " . $sql . "<br>" .
mysqli_error($conn);
}
mysqli_close($conn);

?>

