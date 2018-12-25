<?php
session_start();
if (empty($_SESSION['login']) or empty($_SESSION['password'])) 
{
//если не существует сессии с логином и паролем, значит на этот файл попал невошедший пользователь. Ему тут не место. Выдаем сообщение об ошибке, останавливаем скрипт
exit ("Доступ на цю сторінку дозволений тільки зареєстрованим користувачам. Якщо ви зареєстровані, то увійдіть на сайт під своїм логіном і паролем<br><a href='index_.php'>Головна сторінка</a>");
}

unset($_SESSION['password']);
unset($_SESSION['login']); 
unset($_SESSION['id']);// уничтожаем переменные в сессиях

unset($_SESSION['admin']);
unset($_SESSION['customers']); 
unset($_SESSION['cell']);
unset($_SESSION['id_unit']); 

setcookie("auto", "", time()+9999999);//очищаем автоматический вход
exit("<html><head><meta http-equiv='Refresh' content='0; URL=login.php'></head></html>");
// отправляем пользователя на главную страницу.
?>