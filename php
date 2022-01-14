<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1 align="center" >CALCULADORA BÁSICA </h1>
   
    <br><br>

    <form action="" method="post" >
    Valor 01: <input type="text" value="" name="primNum" /><br/><br/>
    Valor 02: <input type="text" value="" name="seguNum" /><br/><br/>
     
    <input type="submit" name="btnSoma" value="+" id ="1" Onclick="document.getElementById('operador').value=this.value;"/>
    <input type="submit" name="btnDivi"  value="-" id="2" Onclick="document.getElementById('operador').value=this.value;"/>
    <input type="submit" name="btnMult"  value="*" id="3" Onclick="document.getElementById('operador').value=this.value;"/>
    <input type="submit" name="btnSub"  value="/" id="4" Onclick="document.getElementById('operador').value=this.value;"/> <br><br>
   
   
     
      RESULTADO <input type="text" name="resultado" value= "<?php echo Calc(); ?>" />
     
     
      <input type="hyden" name="operador" value="" id="operador" /> <br>
     
   </form>
 
<?php
   
    function Calc()
    {
       
     $tp = $_POST['operador'];  
     $texto1 = (float) $_POST['primNum'];
     $texto2 = (float) $_POST['segNum'];
   
    $resultado = 0;
       
    if ($tp == "+"){
        $resultado =$texto1 + $texto2;
       
    }else if ($tp == "-"){
        $resultado =($texto1 - $texto2);
       
    }else if ($tp == "*"){
        $resultado =($texto1 * $texto2);
       
    }else if ($tp == "/"){
        $resultado =($texto1 / $texto2);
       
    }
}
 
?>
   
   
</body>
</html>
