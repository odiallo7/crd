<?php
/* Smarty version 3.1.30, created on 2018-10-02 13:06:58
  from "C:\xampp\htdocs\crd\view\service\connexion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb35152badf87_54056202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d58b06ce25a5b174048b4ae9dc87f11de82bac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crd\\view\\service\\connexion.html',
      1 => 1538478384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb35152badf87_54056202 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Authentification</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
	</head>
	<body>

	<!--        ESpace              -->		
		<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 col-md-offset-4" style="margin-top:150px;">
			<div class="panel panel-primary">
				<div class="panel-heading" style="font-weight: bold;text-align: center;">Authentification Service Technique</div>
				<div class="panel-body">										
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Service/connexion">
						<div class="form-group">
							<label class="control-label" style="color: blue;">Nom d'utilisateur</label>
							<input class="form-control" type="text" name="s_login" id="s_login" autofocus="autofocus" required />
						</div>
						<div class="form-group">
							<label class="control-label" style="color: blue;">Mot de Passe</label>
							<input class="form-control" type="password" name="s_password" id="s_password" required />
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="connecter" value="Se connecter"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
