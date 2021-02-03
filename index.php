<?php

$disp = '';
$prev = 0;
$name1 ='disp';
$value1 = '';
$result ='';
$name2 ='operator';
$value2 = '';
if(isset($_POST['input'])){
    $disp = $_POST['input'];
}
else{
    $disp = "";
}
if(isset($_POST['val'])){
    $disp = $_POST['input'].$_POST['val'];
    // $prev = $disp;
 }
else{
    //  $prev = $disp;
     $disp = '';
}

if(isset($_POST['operator'])){
    $value1 = $_POST['input'];
    setcookie($name1,$value1,time() + (86400 + 30),"/");

    $value2 = $_POST['operator'];
    setcookie($name2,$value2,time() + (86400 + 30),"/");
    $disp = "";
}
if(isset($_POST['equals'])){
    $disp = $_POST['input'];
    // echo $_COOKIE['operator'];
    // echo $_COOKIE['disp'];
    // echo $disp;
    switch($_COOKIE['operator']){
        case "+":
          $result = $_COOKIE['disp'] + $disp;
          break;
        case "/":
          $result = $_COOKIE['disp'] / $disp;
          break;
        case "-":
          $result = $_COOKIE['disp'] - $disp;
          break;
        case "*":
          $result = $_COOKIE['disp'] * $disp;
          break;
       }
    
    // $result = $disp + $_COOKIE['disp'];
    // echo $result;
    $disp = $result;
}

// if(isset($_POST['operator'])){
//     echo $_POST['operator'];
//     $prev = $disp;
//     // $disp = 0;
//     echo $prev.'<br>';
//     switch($_POST['operator']){
//         case '+':
//             $disp = $prev + $disp;
//             echo $disp;
//             break;
//         case '-':
//             $disp = $prev - $disp;
//             echo $disp;
//             break;
//         case '*':
//             $disp = $prev * $disp;
//             echo $disp;
//             break;
//         case '/':
//             $disp = $prev / $disp;
//             echo $disp;
//             break;
//         case '=':
//             $disp = $prev .$_POST['operator'].$disp;
//             echo $disp;
//             break;
//         default:
//             $disp = 0;
//             break;
//     }
//     $prev = $disp;
//     // $disp =0;

// }


?>



<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
    <link rel="stylesheet" href="style.css">

    <title>My Calculator</title>

</head>

<body>
    <section class="grid_container">
    <form action="index.php" method="post">
        <h1 id="myHeading">
            My Calculator
        </h1>

        <input type="text" id="input" name="input" value="<?php echo $disp; ?>"/>


        <div class="buttons">

            <input type="submit" name="val" class="but" value="9">

            <input type="submit" name="val" class="but" value="8">

            <input type="submit" name="val" class="but" value="7">

            <input type="submit" name="operator" class="but" style="color: #DC143C;" value="+">

        </div>


        <div class="buttons">

        <input type="submit" name="val" class="but" value="6">

        <input type="submit" name="val" class="but" value="5">

        <input type="submit" name="val" class="but" value="4">

        <input type="submit" name="operator" class="but" value="-">

        </div>


        <div class="buttons">

        <input type="submit" name="val" class="but" value="3">

        <input type="submit" name="val" class="but" value="2">

        <input type="submit" name="val" class="but" value="1">

        <input type="submit" name="operator" class="but" value="*">

        </div>


        <div class="buttons">

        <input type="submit" name="." class="but" value=".">

        <input type="submit" name="val" class="but" value="0">

        <input type="submit" name="operator" class="but" value="/">

        <input type="submit" name="equals" class="but" value="=">

        </div>


        <div>

            <button class="clearbut" onclick="clearCal()">Clear</button>

        </div>
        </form>
    </section>


</body>

</html>