<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Imovel</h1>
    <hr>
    <div>

    <table style="top:40px">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th><a href="cadImovel">Novo</a></th>
        </tr>
        </thead>
        <tbody>
        <?php

    require_once '../controller/ImovelController.php';

    $imovel = call_user_func(array('ImovelController','listar'));

    if(isset($imovel)){
    foreach($imovel as $imovel){
        ?>
        
        <tr>
            <td><?php echo $imovel->getDescricao();?></td>
            <td><?php echo $imovel->getValor();?></td>
            <td><?php echo $imovel->getTipo();?></td>
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