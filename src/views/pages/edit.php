<?php 
    $render('header'); 
    //echo $base;?>

<a rel="stylesheet" type="text/css" href="<?=$base; ?>/assets/css/style.css"> </a>
<h2 class="h2-editarcadastro"> Cadastro de Usuário - Alteração</h2> 

    <form class="usuario" method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar"> 

    <label>Nome :<br/>
            <input class="typeNome" type="text" name="name" value="<?=$usuario['nome'];?>"/>
    </label><br/><br/>
    <label>E-mail:<br/>
            <input class="typeEmail" type="email" name="email" value="<?=$usuario['email'];?>"/>
    </label> <br/><br/>
    
    <input class="botao" type="submit" value="Salvar">
    
<?php $render('footer'); ?> 