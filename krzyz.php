<?php
 $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373162", "5YpM88aCen", "sql7373162");
 $sql = "INSERT INTO lib_autor_tytul(id_autor_tytul, id_autor, id_tytul) VALUES (NULL , '".$_POST['autor']."', '".$_POST['tytul']."')";
 mysqli_query($conn, $sql);
 header('Location: https://crud-michal-wojtacha.herokuapp.com');
?>