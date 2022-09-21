<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $numTexto = $_POST["numero"];
            $numInt = intval($numTexto);
            //Aqui você vai recuperar o arquivo JSON que foi salvo no servidor e fazer o decode
            $numeros = array(1, 2, 3);
            array_push($numeros, $numInt);
            $arquivoJSON = json_encode($numeros);
            //Aqui você vai salvar o arquivo JSON com o novo número que você adicionou
        ?>
        <form action="index.php">
            <p>O número <?php echo $numInt ?> foi adicionado com sucesso ao array 
                <?php echo $arquivoJSON ?>!<br>
            <input type="submit" value="Voltar">
        </form>
    </body>
</html>