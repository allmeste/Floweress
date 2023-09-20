<?php
$host = "localhost";
$database = "Flowres";
$user = "root";
$password = "";

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка".mysqli_error($link));
// $link -> set_charset(charset:'utf8');
// $query = "select * from Users";
// $result = mysqli_query($link, $query) or die("Ошибка".mysqli_error($link));
// echo "<H3>Пользователи:</H3>";
// if($result)
// {
//     $rows = mysqli_num_rows($result);

//     for($i = 0; $i< $rows; ++$i)
//     {
//         $row = mysqli_fetch_row($result);
//         echo ($i+1).". ".$row[1]."<br>";
//     }
//     mysqli_free_result($result);
// }
?>