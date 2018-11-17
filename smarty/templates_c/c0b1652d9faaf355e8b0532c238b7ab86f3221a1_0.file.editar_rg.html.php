<?php
/* Smarty version 3.1.33, created on 2018-11-17 17:51:06
  from 'C:\xampp\htdocs\projetos\rgfalso\smarty\templates\editar_rg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf046faa76790_09495778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0b1652d9faaf355e8b0532c238b7ab86f3221a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\rgfalso\\smarty\\templates\\editar_rg.html',
      1 => 1542473464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf046faa76790_09495778 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>RG Falso - Editar</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-success">
      <a class="navbar-brand text-white font-weight-bold" href="index.html">Sistema de Controle de RG</a>   
    </nav>

    <div class="container-fluid mt-2">

      <div class="text-center mb-5">
        <h1></h1>
      </div>

      <div class="row text-center">
        
        <div class="col-md-3">
            <div class="card border-success bg-success">
              <div class="card-header text-white">
                Menu
              </div>
                <ul class="list-group">
                  <a href="/cadastrar" class="list-group-item list-group-item-action">Cadastrar RG</a>
                  <a href="/editar" class="list-group-item list-group-item-action">Editar RG</a>
                  <a href="/pesquisa" class="list-group-item list-group-item-action">Pesquisar RG</a>
                </ul>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card border-success bg-success">
              <div class="card-header text-white">
                <h5>Altere os dados do RG Falso</h5>
              </div>
              <div class="card-body bg-white">
                <form class="text-left">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input class="form-control" type="text" name="nome" id="nome" placeholder="digite o nome completo" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
">
                </div>
                <div class="form-group">
                  <label for="nome_mae">Nome da Mãe</label>
                  <input class="form-control" type="text" name="nome_mae" id="nome_mae" placeholder="digite o nome completo da mãe" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['nome_mae'];?>
">
                </div>
                <div class="form-group">
                  <label for="dt_nascimento">Data de Nascimento</label>
                  <input class="form-control" type="text" name="dt_nascimento" id="dt_nascimento" placeholder="dd/mm/aaaa" maxlength="10"  value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['dt_nascimento'];?>
">
                </div>
                <div class="form-group">
                  <label for="num_rg">Número do RG</label>
                  <input class="form-control" type="number" name="num_rg" id="num_rg" placeholder="somente números" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['num_rg'];?>
">
                </div>
                <p class="mb-2">Escolha o ofício digitalizado</p>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="oficio" required>
                  <label class="custom-file-label" for="oficio" name="oficio">
                     <?php echo $_smarty_tpl->tpl_vars['dados']->value['oficio'];?>

                  </label>
                </div>
                <div class="row mt-4">
                  <div class="col">
                    <a href="/pesquisa" class="btn btn-secondary btn-block" type="reset">Voltar</a>
                  </div>
                  <div class="col">
                    <button class="btn btn-primary btn-block" type="submit">Alterar</button>
                  </div>
                </div> 
              </form>  
              </div>
              
            </div>
        </div>
      </div>
      
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="application/javascript">
      $('input[type="file"]').change(function(e){
          var fileName = e.target.files[0].name;
          $('.custom-file-label').html(fileName);
      });
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
