<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title> Questão 6 </title>
    </head>
    <body>
        <form action="questao 6.php" method="GET"> 
            <label>A</label>
            <input type="number" name="A">
            <label>B</label>
            <input type="number" name="B">
            <button type="submit">Enviar</button> 
        </form>
        <?php
            $a = @$_GET["A"];
            $b = @$_GET["B"];

            if ($a + $b > 100){
                print $a * $b;
            }elseif ($a > $b){
                print $a." é maior que ".$b;
            }else{
                print $b." é maior que ".$a;
            }
        ?>    
    </body>
</html>