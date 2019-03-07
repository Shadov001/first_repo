<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="jquery.dataTables.min.css" />
    <script src="jquery-3.3.1.js"></script>
    <script src="jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>


 <?php

$isGood = true;
$isNice = false;
$isClever = true;
$isMale = false;


if ($isMale)

 {   echo "You are a male";
 
     if ($isGood)
      {echo "You are a good male" ;} 
     if($isNice)
      {echo "You are also nice";}
     if($isClever)
      {echo "You are also clever";}
  } 

 else 
 { echo "You are not male";}
     
?>


<form action = "trening.php" method = "post">
     FIRST VALUE: <input type="text" name="num1" id="num1" type = "number"> <br>
     OPERATION: <input type="text" name="op" id="op"> <br>
     SECOND VALUE: <input type="text" name="num2" id="num2" type = "number"> <br>
     <input type = "submit" value="Zatwierdź" >
</form>



<?php
   if(isset($_POST['num1']))
   {
   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];
   $op = $_POST["op"];

      if($op == "+")
        {$result = $num1 + $num2;
            echo $result;}
        elseif($op == "-")
        {$result = $num1 - $num2;
            echo $result;}
        elseif($op == "*")
        {$result = $num1 * $num2;
            echo $result;}
        elseif($op == "/")
        {$result = $num1 / $num2;
            echo $result;}
     else {echo "Invalid Operator";}

   }
?>

<form action = "trening.php" method = "post">
     GRADE: <input type="text" name="grade"> <br>
     <input type = "submit" value="Zatwierdź">
</form>

<?php
   if(isset($_POST['grade']))
   {
  $grade = $_POST["grade"];
  echo $grade;


    if($grade == 'A')
    { echo "You did pretty well";}
    elseif ($grade == 'B')
    { echo "You mess up a bit";}
    elseif ($grade == 'C')
    { echo "You were not prepared, totally";}
    elseif ($grade == 'D')
    { echo "You are stupid";}
    else { echo "It's not a grade";}
   }
?>

 
Your lucky number is: <input type="text" name="number1" id="number1" type = "number"> <br>
Your another lucky number is: <input type="text" name="number2" id="number2" type = "number"> <br>
<input type="button" onmousemove="this.value=randomizeMe()" value ="OK" > <br>

<script>

   function randomizeMe (){
       var x,y;
       x= document.getElementById('number1').value*1;
       y= document.getElementById('number2').value*1;

      return Math.sin(x+y);

   }

</script>

</body>
</html>