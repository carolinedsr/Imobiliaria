<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuario</h1>
    <hr>
    <div>

    <table style="top:40px">
    <thead>
        <tr>
            <th>Login</th>
            <th>Permissão</th>
            <th><a href="cadUsuario">Novo</a></th>
        </tr>
        </thead>
        <tbody>
        <?php

    require_once '../controller/UsuarioController.php';

    $usuario = call_user_func(array('UsuarioController','listar'));

    if(isset($usuario)){
    foreach($usuario as $usuario){
        ?>
        
        <tr>
            <td><?php echo $usuario->getLogin();?></td>
            <td><?php echo $usuario->getPermissao();?></td>
            <td>
                <a href="">Editar</a>
                <a href="">Excluir</a>
            </td>
    </tr>
    <?php
    }
}else{
    ?>
    <tr>
        <td colspan = "S">Nenhum registro encontrado</td>
    </tr>
    <?php
}

?>
</tbody>
</table>
</div>
</body>
</html>