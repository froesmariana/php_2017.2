<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
    </head>
    <body>
        <h1>Minha primeira página em PHP com código básico "Olá, Mundo!"</h1>
        <code>
            <!--para iniciarmos um bloco de código PHP usamos-->
            <?php
                # para declararmos uma variável é necessario usar o simbolo $
                $hello = "Olá, Mundo PHP";
                $outraMsg = 'Estamos começando a estudar o PHP'."<br>";
                $terceiraMsg = "O valor da primeira msg é: $hello<br>";

                // Comando utilizado para imprimir(saída na tela)
                echo($hello.'<br>');
                echo($outraMsg);
                echo$terceiraMsg;

                /*
                    Detalhes Importantes;

                    Em PHP sempre será necessário iniciar uma variável com $.
                    Para que o servidor entenda os códigos PHP os arquivos devem ser salvos com a extensão .php.
                */
            ?>
        </code>
    </body>
</html>