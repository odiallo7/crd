<?php
/* Smarty version 3.1.30, created on 2018-10-02 15:07:17
  from "C:\xampp\htdocs\crd\view\rapport\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb36d85d706c3_35876006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036aad1e1dcf09d2c058479b47ee2629520679d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crd\\view\\rapport\\index.html',
      1 => 1538485633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb36d85d706c3_35876006 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Accueil Rapport</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<div class="nav navbar navbar-default">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rapport/index">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rapport/add">Soumettre Un Rapport</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rapport/liste">Consultation Rapports</a></li>
			</ul>
		</div>
		
	</body>
</html>
		
<?php }
}
