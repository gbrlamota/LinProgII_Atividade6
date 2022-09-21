<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
        <?php
            //Aqui você vai recuperar o arquivo JSON que foi salvo no servidor e fazer o decode
            $numeros = array(1, 2, 4, 3);
            
            function maior($vetor){
                $maior = 0;
                foreach($vetor as $numero){
                    if ($numero > $maior){
                        $maior = $numero;
                    }
                }
                return $maior;
            }
            
            echo "O maior número é ";
            echo maior($numeros);
            ?>
        <form action="index.php">
            <input type="submit" value="Voltar">
        </form>

    </body>
</html>