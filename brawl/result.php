<!DOCTYPE html>
<html>
<head>
	<title>
		Результаты
	</title>
</head>
<body>
<?php
   $ot = 0;

 	  //1
      if ($_POST['rb1'] == 'a'){$ot = $ot + 1 ;}
      if ($_POST['rb1'] == 'b'){$ot = $ot + 2 ;} 
      if ($_POST['rb1'] == 'c'){$ot = $ot + 3 ;}

      //2
      if ($_POST['rb2'] == 'a'){$ot = $ot + 5 ;}
      if ($_POST['rb2'] == 'b'){$ot = $ot + 4 ;} 
      if ($_POST['rb2'] == 'c'){$ot = $ot + 3 ;}
      if ($_POST['rb2'] == 'd'){$ot = $ot + 2 ;}
      if ($_POST['rb2'] == 'e'){$ot = $ot + 1 ;}

      //3
      if ($_POST['rb3'] == 'a'){$ot = $ot + 5 ;}
      if ($_POST['rb3'] == 'b'){$ot = $ot + 4 ;} 
      if ($_POST['rb3'] == 'c'){$ot = $ot + 2 ;}
      if ($_POST['rb3'] == 'd'){$ot = $ot + 1 ;}
      if ($_POST['rb3'] == 'e'){$ot = $ot + 3 ;}

      //4
      if ($_POST['rb4'] == 'a'){$ot = $ot + 5 ;}
      if ($_POST['rb4'] == 'b'){$ot = $ot + 1 ;} 

      //5
      if ($_POST['rb5'] == 'a'){$ot = $ot + 1 ;}
      if ($_POST['rb5'] == 'b'){$ot = $ot + 3 ;} 
      if ($_POST['rb5'] == 'c'){$ot = $ot + 4 ;}
      if ($_POST['rb5'] == 'd'){$ot = $ot + 2 ;}
      if ($_POST['rb5'] == 'e'){$ot = $ot + 1 ;}
      ?>

<?php      //results 5 - 22
$loser1 = "<img src ='1.jpg'>";
$loser2 = "<img src ='2.jpg'>";
$loser3 = "<img src ='3.jpg'>";
$loser4 = "<img src ='4.jpg'>";
$loser5 = "<img src ='5.jpg'>";
$loser6 = "<img src ='6.jpg'>";
$loser7 = "<img src ='7.jpg'>";
$loser8 = "<img src ='8.jpg'>";
$loser9 = "<img src ='9.jpg'>";
$loser10 = "<img src ='10.jpg'>";
$loser11 = "<img src ='11.jpg'>";
$loser12 = "<img src ='12.jpg'>";
$loser13 = "<img src ='13.jpg'>";
$loser14 = "<img src ='14.jpg'>";



if ($ot == 5){echo $user5 = "Вы Булл";}
if ($ot == 5){echo $loser1;}

if ($ot == 6){echo $user6 = "Вы Шелли";}
if ($ot == 6){echo $loser2;}
 
if ($ot == 7){echo $user7 = "Вы Барли";}
if ($ot == 7){echo $loser3;}

if ($ot == 8){echo $user8 = "Вы Эльпримо";}
if ($ot == 8){echo $loser4;}
 
if ($ot == 9){echo $user9 = "Вы Карл";}
if ($ot == 9){echo $loser5;}

if ($ot == 10){echo $user10 = "Вы Рико";}
if ($ot == 10){echo $loser6;}
 
if ($ot == 11){echo $user11 = "Вы Вольт";}
if ($ot == 11){echo $loser7;}
 
if ($ot == 12){echo $user12 = "Вы Биби";}
if ($ot == 12){echo $loser8;}
 
if ($ot == 13){echo $user13 = "Вы Макс";}
if ($ot == 13){echo $loser9;}

if ($ot == 14){echo $user14 = "Вы Леон";}
if ($ot == 14){echo $loser10;}

if ($ot == 15){echo $user15 = "Вы Амбер";}
if ($ot == 15){echo $loser11;}

if ($ot == 16){echo $user16 = "Вы Ворон";}
if ($ot == 16){echo $loser12;}

if ($ot == 17){echo $user17  = "Вы Спайк";}
if ($ot == 17){echo $loser13;}

?>

</body>
</html>