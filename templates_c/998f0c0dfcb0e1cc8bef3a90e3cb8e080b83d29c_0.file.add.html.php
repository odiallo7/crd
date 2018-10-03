<?php
/* Smarty version 3.1.30, created on 2018-10-02 17:27:22
  from "C:\xampp\htdocs\crd\view\rapport\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb38e5aa10a03_41496370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '998f0c0dfcb0e1cc8bef3a90e3cb8e080b83d29c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crd\\view\\rapport\\add.html',
      1 => 1538494038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb38e5aa10a03_41496370 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Création Rapport</title>
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

		<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 col-md-offset-4" style="margin-top:20px;">
			<div class="panel panel-primary">
				<div class="panel-heading" style="font-weight: bold;text-align: center;">Enregistrement d'un Rapport Mensuel</div>
				<div class="panel-body">										
					<form method="post" action="">
						<div class="form-group">
						    <label for="control-label"> Sélectionnez le mois </label>
						    <select id="r_mois" name="r_mois" class="form-control">
						        <option value="">-------------</option>
						        <option value="Janvier">Janvier</option>
						        <option value="Fevrier">Février</option>
						        <option value="Mars">Mars</option>
						        <option value="Avril">Avril</option>
						        <option value="Mai">Mai</option>
						        <option value="Juin">Juin</option>
						        <option value="Juillet">Juillet</option>
						        <option value="Aout">Aout</option>
						        <option value="Septembre">Septembre</option>
						        <option value="Octobre">Octobre</option>
						        <option value="Novembre">Novembre</option>
						        <option value="Decembre">Décembre</option>
						    </select>
						  </div>
						  <div class="form-group">
						      <label for="control-label"> Sélectionnez l'année en cours </label>
						      <select id="r_annee" name="r_annee" class="form-control">
						          <option value="">-------------</option>
						          <option value="2018">2018</option>
						          <option value="2019">2019</option>
						          <option value="2020">2020</option>
						          <option value="2021">2021</option>
						          <option value="2022">2022</option>						         
						      </select>
						    </div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="creer" value="Créer Un Rapport"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>
		
<?php }
}
