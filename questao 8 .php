<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title> Questão 8 </title>
    </head>
    <body>
        <form action="questao 8.php" method="GET"> 
            <label>1ºnumero</label>
            <input type="number" name="A">
            <label>2ºnumero</label>
            <input type="number" name="B">
            <button type="submit">Enviar</button> 
        </form>
        <?php
            $A = @$_GET["A"];
            $B = @$_GET["B"];

            if($A > $B ){
                print .$A;
            }else{
                for ($A; $A < $B; $A = $A + 1){
                    print .$A    
                }
            }
        ?>
    </body>
</html>            