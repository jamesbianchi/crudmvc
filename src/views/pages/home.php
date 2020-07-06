<?php $render('header'); ?>
<a rel="stylesheet" type="text/css" href="<?=$base; ?>/assets/css/style.css"> </a>

<h3 class="adicionausuarios">
    <a href="<?=$base;?>/novo"> <i class="fa fa-plus-square" aria-hidden="true"></i> Adicionar Novo Usuário </a> <br/>   
</h3>

<table class="tabela" border="1" width="100%">
<tr>
    <th> ID</th>
    <th> NOME</th>
    <th> EMAIL</th>
    <th> AÇÕES</th>
</tr>

<?php foreach($usuarios as $usuario): ?>
<tr>
    <td><?=$usuario['id'];?></td>
    <td><?=$usuario['nome'];?></td>
    <td><?=$usuario['email'];?></td>
    <td>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar"> 
        <i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i></a>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')"> 
        <i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
    </td>
</tr>
<?php endforeach;?>
</table>

<?php $render('footer'); ?>
</html>