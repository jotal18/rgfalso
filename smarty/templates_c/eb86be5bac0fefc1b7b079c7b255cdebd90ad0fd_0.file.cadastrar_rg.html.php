<?php
/* Smarty version 3.1.33, created on 2018-11-20 23:03:23
  from 'C:\xampp\htdocs\projetos\rgfalso\smarty\templates\cadastrar_rg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf4aedb99d1a1_44655051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb86be5bac0fefc1b7b079c7b255cdebd90ad0fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\rgfalso\\smarty\\templates\\cadastrar_rg.html',
      1 => 1542762176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf4aedb99d1a1_44655051 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>RG Falso - Cadastrar</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-info">
      <a class="navbar-brand text-white font-weight-bold" href="/">Sistema de Controle de RG</a>   
    </nav>

    <div class="container mt-2">

      <div class="text-center mb-5">
        <h1></h1>
      </div>

      <div class="row text-center">
        
        <div class="col-md-3">
            <div class="card border-secondary bg-light">
              <div class="card-header font-weight-bold">
                Menu
              </div>
                <ul class="list-group">
                  <a href="/cadastrar" class="list-group-item list-group-item-action">Cadastrar RG</a>
                  <a href="/pesquisa" class="list-group-item list-group-item-action">Pesquisar RG</a>
                </ul>
            </div>
        </div>

        <div class="col-md-9">

          <?php if (isset($_smarty_tpl->tpl_vars['dados']->value)&!empty($_smarty_tpl->tpl_vars['dados']->value)) {?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><?php echo $_smarty_tpl->tpl_vars['dados']->value;?>
</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }?>

            <div class="card border-secondary bg-light">
              <div class="card-header font-weight-bold">
                <h5>Cadastre os dados do RG Falso</h5>
              </div>
              <div class="card-body bg-white">
                <form class="text-left" method="post" action="/cadastrar" enctype="multipart/form-data">
                 
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="digite o nome completo" required value="<?php if (isset($_smarty_tpl->tpl_vars['nome']->value)) {
echo $_smarty_tpl->tpl_vars['nome']->value;
}?>">
                    <small class="text-danger">* Campo obrigatório</small>
                  </div> 

                  <div class="form-group">
                    <label for="nome_mae">Nome da Mãe</label>
                    <input class="form-control" type="text" name="nome_mae" id="nome_mae" placeholder="digite o nome completo da mãe" required value="<?php if (isset($_smarty_tpl->tpl_vars['nome_mae']->value)) {
echo $_smarty_tpl->tpl_vars['nome_mae']->value;
}?>">
                    <small class="text-danger">* Campo obrigatório</small>
                  </div>

                  <div class="form-group">
                    <label for="dt_nascimento">Data de Nascimento</label>
                    <input class="form-control" type="text" name="dt_nascimento" id="dt_nascimento" placeholder="dd/mm/aaaa" maxlength="10" required onkeypress="mascaraData(this)" value="<?php if (isset($_smarty_tpl->tpl_vars['dt_inicial']->value)) {
echo $_smarty_tpl->tpl_vars['dt_inicial']->value;
}?>">
                    <small class="text-danger">* Campo obrigatório</small>
                  </div>

                  <div class="form-group">
                    <label for="num_rg">Número do RG</label>
                    <input class="form-control" type="number" name="num_rg" id="num_rg" placeholder="somente números" required  value="<?php if (isset($_smarty_tpl->tpl_vars['num_rg']->value)) {
echo $_smarty_tpl->tpl_vars['num_rg']->value;?>
 <?php }?>">
                    <small class="text-danger">* Campo obrigatório</small>
                  </div>

                  <p class="mb-2">Escolha o ofício digitalizado</p>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="oficio" name="oficio" required>
                    <label class="custom-file-label" for="oficio" name="oficio">
                      escolha o arquivo digitalizado no formato .pdf
                    </label>

                    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                      <small class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</small> 
                    <?php } else { ?>
                      <small class="text-danger">* Campo obrigatório</small>
                    <?php }?>

                  </div>

                  <div class="row mt-4">
                    <div class="col">
                      <button class="btn btn-secondary btn-block" type="reset">Cancelar</button>
                    </div>
                    <div class="col">
                      <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
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

    <?php echo '<script'; ?>
>
      function mascaraData(val) {
  var pass = val.value;
  var expr = /[0123456789]/;

  for (i = 0; i < pass.length; i++) {
    // charAt -> retorna o caractere posicionado no índice especificado
    var lchar = val.value.charAt(i);
    var nchar = val.value.charAt(i + 1);

    if (i == 0) {
      // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
      // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
      // instStr.search(expReg);
      if ((lchar.search(expr) != 0) || (lchar > 3)) {
        val.value = "";
      }

    } else if (i == 1) {

      if (lchar.search(expr) != 0) {
        // substring(indice1,indice2)
        // indice1, indice2 -> será usado para delimitar a string
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }

    } else if (i == 4) {

      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }
    }

    if (i >= 6) {
      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
      }
    }
  }

  if (pass.length > 10)
    val.value = val.value.substring(0, 10);
  return true;
}
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
