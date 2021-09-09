<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-image: url(tpt.jpg);
			background-repeat: no-repeat;
			background-size: 100%;
		}

	</style>
</head>
<body>
	<div>
		<h1 style="text-align: center; font-size: 50px; color: 	#FFD700 ; background-color:#8B0000 ">Вы успешно зарегистрировались!</h1>
	</div>
	<div>
		<a href="index.php" target="_blank"><img src="eee.webp" style="width: 200px"></a>
	</div>
<div style="text-align: center;font-size: 50px; color: 	#FFD700 ; background-color:#8B0000;margin-top: 33%">
	

<?php
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

?>




<div>
	<a href="tect.php" target="_blank"><img src="3.png" style="width: 250px; left: 100%"></a>
</div>

</div>
</body>
</html>