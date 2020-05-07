<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$mysql = new mysqli('localhost','root','','archer');

$mysql-> query("Insert Into `user_reg` (`full_name`,`email`,`username`,`password`) Values('$full_name','$email','$username','$password')");
$mysql-> close();

header('Location: /login.html');
?> 
