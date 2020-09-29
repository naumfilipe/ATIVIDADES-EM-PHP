<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title> Questão 10 </title>
    </head>
    <body>
        <form action="questao 10.php" method="GET"> 
            <label>A</label>
            <input type="number" name="A">
            <label>B</label>
            <input type="number" name="B">
            <label>C</label>
            <input type="number" name="C">
            <label>D</label>
            <input type="number" name="D">
            <label>E</label>
            <input type="number" name="E">
            <label>F</label>
            <input type="number" name="F">
            <label>G</label>
            <input type="number" name="G">
            <label>H</label>
            <input type="number" name="H">
            <label>I</label>
            <input type="number" name="I">
            <label>J</label>
            <input type="number" name="J">
            <button type="submit">Enviar</button>

        </form>
        <?php
            $a = @$_GET["A""B""C""D""E""F""G""H""I""J"];
            }    
            if ($a % 2 == 0){
                print "o numero " .$a " é par"
            }else{
                print "o numero " .$a " é ímpar"
            }
            ?>    
    </body>
</html>