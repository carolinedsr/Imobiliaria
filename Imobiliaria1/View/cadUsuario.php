<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        
        section{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
        }

        form{
            font-family: Arial;
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        form input{

            outline: unset;
            padding: 10px;
            min-width: 320px;
            border: 1px solid;
            border-radius: 20px;
        }

        form input[type=submit]{
            background-color: cornflowerblue;
            color: white;

        }

        header{

        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background-color: cornflowerblue;
        color: white;
        font-family: Cambria, Arial;
        }
    </style>
</head>

<body>
    <header>
    <h1>Cadastro de Usuário</h1>
    </header>
    <br/>
    <section>
    <form action="" name="cadUsuario" id="cadUsuario" method="post">
        
        <label>Login:</label>
        <input type="text" name="login" id="login"><br/><br/>
        <label>Senha:</label>
        <input type="text" name="senha1" id="senha1"><br/><br/>
        <label>Confirmação de Senha:</label>
        <input type="password" name="senha2" id="senha2"><br/><br/>
        <label>Permissão:</label>
        <select name="permissao" id="permissao">
            <option value="0"></option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
        </select><br/><br/>
        <input type="submit" name="btnSalvar" id="btnSalvar" value="Cadastrar">
    </form>
    </section>
    <?php

        if(isset($_POST['btnSalvar'])){
            require_once '../controller/UsuarioController.php';
            call_user_func(array('UsuarioController','salvar'));
        }
    ?>
</body>
</html>