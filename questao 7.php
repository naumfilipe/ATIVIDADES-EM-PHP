<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title> Questão 7 </title>
    </head>
    <body>
        <form action="questao 7.php" method="GET"> 
            <label>Valor Inicial</label> 
            <input type="number" name="A"/>
            <label>Valor Final</label>
            <input type="number" name="B"/>
            <button type="submit">Enviar</button> 
        </form>
        <?php
            $A = @$_GET["A"];
            $B = @$_GET["B"];
            
            foreach (range($A, $B) as $AB){
                print $AB;
            }
        ?>
    </body>
</html>            