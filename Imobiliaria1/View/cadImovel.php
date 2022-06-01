<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imóvel</title>

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
            padding: 20px;
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
    <h1>Cadastro de Imóvel</h1>
    </header>
    
    <section>
    <form action="" name="cadImovel" id="cadImovel" method="post">
        
        <label>Descrição</label>
        <input type="text" name="descricao" id="descricao"><br/><br/>
        <label>Valor</label>
        <input type="text" name="valor" id="valor"><br/><br/>
        <label>Tipo</label>
        <select name="tipo" id="tipo">
            <option value="0"></option>
            <option value="C">Casa</option>
            <option value="A">Apartamento</option>
            <option value="K">Kitnet</option>
        </select><br/><br/>
        <input type="submit" name="btnSalvar" id="btnSalvar" value="Cadastrar">
    </form>
    </section>
    <?php

        if(isset($_POST['btnSalvar'])){
            require_once '../controller/ImovelController.php';
            call_user_func(array('ImovelController','salvar'));
        }
    ?>
</body>
</html>