<?php

//localhost
//root
//
//db_curso_udemy

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','db_curso_udemy');

$charset = 'utf8';

$conn = mysqli_connect(HOST,USER,PASS,DB)
        or die('Falhou.........');
?>

