<?php

$connection = mysqli_connect("localhost","root","","iwtdb");

if($_POST){
$name = $_POST('txt1');
$home = $_POST('tx2');
$mob = $_POST('txt3');

$q = mysqli_quert($connection."insert into tb_student (st_name,st_home,st_mob) 
    values('($st_name)','($st_home)','($st_mob)')") or die(mysqli_error($connection));


    if($q)
    {
    echo "<script>alert('record added succesfully') </script>";
    }
}
?>

<html>
    <body>
        <form method"post">
            name : <input type="text" name="txt1"/>
            home : <input type="text" name="txt1"/>
            name : <input type="text" name="txt1"/>
</body>
</hmtl>