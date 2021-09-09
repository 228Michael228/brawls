<!DOCTYPE html>

<head>
    <title>Калькулятор</title>
    <style type="text/css">
        form{
            width: 250px;
            position: absolute;
            text-align: center;
            position: fixed; top: 15%; left: 65%;
        }
        .otv{
            font-size: 30px;
        }
        .img1{
            width: 100%; 
        }
        .calc1{
            width: 1000px;
        }
        .calc{
            height: 200%;
            left: 50%;
        }
        .aye{
          font-size: 26px;
          height: 36px;
          width: 220px;
          left: 50%;
        }
        .oper{
        font-size: 26px;
        height: 34px;
        width: 40px; 
        }
        .spike{
            width: 400px;
            left: 50%;
            top: 44%;
        }
        body{
            background-image: url(calcfon.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
</head>
<body>
<form method="post" class="calc">
<input type="text" name="num1" class="aye"> 1 число <br>
<input type="text" name="num2" class="aye"> 2 число <br>
<select name="oper" class="oper">
    <option value="+">+</option>
        <option value="-">-</option>
            <option value="/">/</option>
                <option value="*">*</option>
<br>
</select>u
<input type="submit" name="submit" value="Вычислить" class="aye">
</form>
<div class="calc1">
<?php
if (isset($_POST['submit'])) {
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$oper=$_POST['oper'];
if (!is_numeric($n1)|| !is_numeric($n1)) {
    $err="Ошибка";
}

else {
    switch ($oper) {
        case 'plus':
            $res=$n1+$n2;
                break;
        case 'minus':
                $res=$n1-$n2;
                break;
        case 'um':
                $res=$n1*$n2;
                break;
        case 'del':
                $res=$n1/$n2;
                break;

        default:
            echo "<h1>Ваш ответ</h1>";
                break;
    }
    if (isset($err)) {
        echo "Ошибка".$err;
    }

    else {
        echo "<h1  class='otv'>".$n1." "." ".$n2."="."</h1>";
        echo "<h1  class='otv'>"."Ответ: ".$res."</h1>";
    }
}
}
?>
</div>

<div>
    <img src="2spike.gif" class="spike" style="position: absolute;">
</div>
</body>
</html>