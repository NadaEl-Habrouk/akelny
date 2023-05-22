<?php
session_start();
$server="localhost";
  $dbname="akelny";
  $password="";
  $user="root";
  $connect= mysqli_connect($server,$user,$password,$dbname);
  if(!$connect){
    die('Error'.mysqli_connect_error());
   }
   ?>