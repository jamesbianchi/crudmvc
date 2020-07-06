<?php 
    $render('header'); 
    // echo $base;
?>

<a rel="stylesheet" type="text/css" href="<?=$base; ?>/assets/css/style.css"> </a>

<h2 class="h2-cadastro"> Cadastro de Usuário - Adicionar</h2> 
    <form class="Usuario" method="POST" action="<?=$base;?>/novo"> 

    <label>Nome :<br/>
            <input class="typeNome" type="text" name="name" required placeholder="nome completo"/>
    </label><br/><br/>
    <label>E-mail:<br/>
            <input class="typeEmail" type="email" name="email" placeholder="nome@dominio.com" require()/>
    </label> <br/><br/>
    
    <input class="botao" type="submit" value="Adicionar">
    
<?php $render('footer'); ?> 