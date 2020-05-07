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
   
$name_pos = filter_var(trim($_POST['name_pos']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
$mesage = filter_var(trim($_POST['mesage']),FILTER_SANITIZE_STRING);

$sql ="INSERT INTO sms (name_pos, phone, mesage) VALUES ('$name_pos','$phone', '$mesage')";
if(!mysqli_query($con,$sql))
{
 echo 'Произошла ошибка';
 
}
else
{
 echo 'Спасибо, за вопрос! Мы перезвоним Вам в течении 5 минут.';

}
?>