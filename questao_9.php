<!DOCTYPE html>
<html>
    <body>
        <fieldset>
            <form>
                <label for="nome_">Nome:</label>
                <input name="nome" id="nome_" type="text" placeholder="DIgite seu nome">

                <label for="salario_">Salário:</label>
                <input name="salario" id="salario_" type="number" placeholder="Infome seu salário">

            </form>
        </fieldset>
        <?php
        $nome = $_GET ['nome'];
        $salario = $_GET ['salario'];
        
        $salarioMes = $salario + (15*60)/100;
            
    ?>
    </body>
</html>

    


