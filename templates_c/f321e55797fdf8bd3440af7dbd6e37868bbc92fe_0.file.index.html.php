<?php
/* Smarty version 3.1.30, created on 2018-10-02 18:09:08
  from "C:\xampp\htdocs\crd\view\activite\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb39824458354_58497431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f321e55797fdf8bd3440af7dbd6e37868bbc92fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crd\\view\\activite\\index.html',
      1 => 1538495587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb39824458354_58497431 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Accueil Activités</title>
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
Activite/index">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Activite/add">Enregistrer Une Adtivité</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Activite/liste">Consultation Rapports</a></li>
			</ul>
		</div>
		
	</body>
</html>
		
<?php }
}
