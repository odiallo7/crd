<?php
/* Smarty version 3.1.30, created on 2018-10-03 14:56:46
  from "C:\xampp\htdocs\crd\view\activite\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb4bc8e8288f0_28946485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815b65a044770bdcf83477f883e8cbf724dfb25b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crd\\view\\activite\\add.html',
      1 => 1538571399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb4bc8e8288f0_28946485 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ajout d'activités</title>
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
			nav
		</style>
	</head>
	<body>
		<div class="nav navbar navbar-default" style="font-weight: bold;">
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

		<div class="col-md-6 col-sm-8 col-xs-12 col-lg-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading" style="font-weight: bold;text-align: center;">Ajout d'Activités au Rapport du mois</div>
				<div class="panel-body">	

				<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Activité enregistré avec sucess! Vous pouvez continuer ou sortir!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>

					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Activite/add">
						<div class="form-group">							
						  <label class="control-label">Activité</label>
						  <textarea class="form-control" rows="3" name="a_titre" id="a_titre" placeholder="Votre activité..." autocomplete="off"></textarea>	
						</div>
						<div class="form-group">							
						  <label class="control-label">Résultats</label>
						  <textarea class="form-control" rows="3" name="a_resultat" id="a_resultat" placeholder="Les résultats..." autocomplete="off"></textarea>	 
						</div>
						<div class="form-group">							
						  <label class="control-label">Contraintes</label>
						  <textarea class="form-control" rows="3" name="a_contrainte" id="a_contrainte" placeholder="Vos contraintes..." autocomplete="off"></textarea>	 
						</div>
						<div class="form-group">							
						  <label class="control-label">Observations</label>
						  <textarea class="form-control" rows="3" name="a_observation" id="a_observation" placeholder="Observations..." autocomplete="off"></textarea>
						</div>
						<div class="form-group col-md-6 col-md-offset-4">
							<input class="btn btn-success" type="submit" name="valider" value="Enregistrer et Continuer" />
							<input class="btn btn-danger" type="reset" name="terminer" value="Terminer"/>
						</div>
						 
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>
		
<?php }
}
