<?php ?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Cadastro Luz Ingá</title>
        <meta charset="UTF-8">
        <meta name="viewpor" content="width=device-wiedth, initial-scale=1.0">
    </head>
    <body>
        <h1>Faça seu Orçamento!</h1>
        <form action='Connection.php' method="POST">
            <label for="name">Nome: </label><br>
            <input type='text' name='name' id="name" required /><br>
            <label for="telefone">Telefone: </label><br>
            <input type='text' name='telefone' id="telefone" required /><br>
            <label for="endereco">Endereço: </label><br>
            <input type='text' name='endereco' id="endereco" required /><br>
            <label for="cidade">Cidade: </lab el><br>
                <input type='text' name='cidade' id="cidade" required /><br>
                <label for="desejo">Lista de desejo: </label><br>
                <input type='text' name='desejo' id="desejos" required /><br>
                <input type='submit' name='submit' id="submit" value="Gravar"/>
        </form><br>
        
        <form action='View.php' method="POST">
            <input type='submit' name='submit' id="submit" Value="Consulta" />
        </form><br>
        <form action='Update.php' method="POST">
            <label for="IDCliente">ID: </label><br>
            <input type='text' name='IDCliente' id="Cliente" required /><br>
            <label for="name">Nome: </label><br>
            <input type='text' name='name' id="name" required /><br>
            <label for="telefone">Telefone: </label><br>
            <input type='text' name='telefone' id="telefone" required /> <br><br>
            <label for="endereco">Endereço: </label><br>
            <input type='text' name='endereco' id="endereco" required /><br><br>
            <label for="cidade">Cidade: </lab el><br>
            <input type='text' name='cidade' id="cidade" required /> <br><br>
            <label for="desejo">Lista de desejo: </label><br>
            <input type='text' name='desejo' id="desejos" required /><br>
            <input type='submit' name='submit' id="submit" value="Edit" />
        </form>
    </body>
    </html>
