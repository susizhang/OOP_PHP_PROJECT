<?php

$db_server='localhost';
$db_user='root@localhost';
$db_pass='';
$db_name='cms_project';
$conn='';


$conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($conn){
    echo'You are connected';
}else{
    echo'Could not connect!';
}