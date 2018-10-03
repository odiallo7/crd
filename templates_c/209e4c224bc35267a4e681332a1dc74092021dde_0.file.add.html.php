<?php
/* Smarty version 3.1.30, created on 2018-10-02 14:12:27
  from "C:\xampp\htdocs\crd\view\service\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb360ab1c7b53_75724522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '209e4c224bc35267a4e681332a1dc74092021dde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crd\\view\\service\\add.html',
      1 => 1538482342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb360ab1c7b53_75724522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Incription Service Technique</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery-ui.js"><?php echo '</script'; ?>
>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 col-md-offset-3" style="margin-top:20px;">
			<div class="panel panel-primary">
				<div class="panel-heading">Inscription Service Technique</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Service/add">
						<div class="form-group">					
							<label class="control-label">Nom du Service</label>
							<input class="form-control" type="text" name="s_nom" id="s_nom" maxlength="200" />							
						</div>
						
						<div class="form-group">
							<label class="control-label">Sigle</label>
							<input class="form-control" type="text" name="s_sigle" id="s_sigle" value="" maxlength="10" />
						</div>
						<div class="form-group">
							<label class="control-label">Téléphone</label>
							<input class="form-control" type="text" name="s_telephone" id="s_telephone" maxlength="12" />
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input class="form-control" type="text" name="s_email" id="s_email"/>
						</div>
						<div class="form-group">
							<label class="control-label">Adresse</label>
							<input class="form-control" type="text" name="s_adresse" id="s_adresse"/>
						</div>
						<div class="form-group">
							<label class="control-label">Responsable</label>
							<input class="form-control" type="text" name="s_responsable" id="s_responsable"/>
						</div>
						<div class="form-group">
							<label class="control-label">Téléphone du Responsable</label>
							<input class="form-control" type="text" name="s_responsabletel" id="s_responsabletel"/>
						</div>

						<?php echo '<script'; ?>
 type="text/javascript">
							$("#s_sigle").keyup(function(){
							    update();
							});
							function update() {
							  $("#s_login").val($('#s_sigle').val());
							}
						<?php echo '</script'; ?>
>
						<div class="form-group">
							<label class="control-label">Login</label>
							<input class="form-control" type="text" name="s_login" id="s_login" value="" readonly />
						</div>
						<div class="form-group">
							<label class="control-label">Mot de Passe</label>
							<input class="form-control" type="password" name="s_password" id="s_password"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Service/index"> Annuler </a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
