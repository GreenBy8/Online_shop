<?php

$con = mysqli_connect('localhost','root','','archer');
if(!$con)
   {
    echo 'Невозможно подключиться к серверу';
   }
   
   if(!mysqli_select_db($con,'archer'))
   {
    echo 'Ошибка базы данных';
   }
   
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_reg WHERE username = '$username' and password = '$password'";    
if(!mysqli_query($con,$sql))
{
 echo 'Произошла ошибка';
 
}
else
{
 header ('Location: /category.html');

}

?>