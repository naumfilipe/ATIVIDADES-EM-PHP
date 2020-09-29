<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title> Questão 9 </title>
    </head>
    <body>
        <form action="questao 9.php" method="GET"> 
            <label>Digite um numero:</label> 
            <input type="text" name="A"/>
            <button type="submit">Enviar</button> 
        </form>
        <?php
            $A = @$_GET['A'];

            if(isset($_GET['A'])){ 
                if ($A % 10 == 0){
                    print $A . "numero divisivel por 10 " .$A/10;
                }else{
                    print $A . "numero nao divisivel por 10";
                }if ($A % 5 == 0){
                    print $A . "numero divisivel por 5" .$A/10;
                }else{
                    print $A . "numero nao divisivel por 5";
                }if ($A % 2 == 0){
                    print $A . "numero divisivel por 2" .$A/2;
                }else{
                    print $A . "numero nao divisivel por 2";
                }     
            }
            else{
                print "informe um numero";
            }
        ?>
    </body>
</html>            