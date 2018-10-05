<?php
/* Smarty version 3.1.30, created on 2018-10-05 15:39:17
  from "C:\xampp\htdocs\crd\view\rapport\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb76985a1b3c8_93472724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6c8329cdb6596eac4344758e42d093e50a5fe1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crd\\view\\rapport\\liste.html',
      1 => 1538746751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb76985a1b3c8_93472724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title> Liste des Rapports </title>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/dataTables.bootstrap.min.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>


     <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
            $(".table").DataTable({
        });
      });
    <?php echo '</script'; ?>
>
   


</head>
<body>
    
    <div class="navbar navbar-default navbar-fixed-top">
      <ul class="nav navbar-nav">
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rapport/index">Accueil</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rapport/add">Soumettre Un Rapport</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rapport/liste">Consultation des CRD</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rapport/check">Consultation Rapports Mensuels</a></li>
      </ul>
    </div>

     

    <div class="container" style="margin-top: 60px; width: 100%;">

      <div class=" alert alert-warning">
        <h3 style="text-align: center;"> La liste des Rapports des CRD !</h3>
      </div>

    <?php if (isset($_smarty_tpl->tpl_vars['rapports']->value)) {?>
       <?php if ($_smarty_tpl->tpl_vars['rapports']->value != null) {?>
    
    <table width="100%" id="table" class="table table-striped table-bordered" cellspacing="0" style="width: 100%; text-align: center;">
      <thead>
        <tr>
            <th>Service</th>
            <th>Mois</th>
            <th>Année</th>
            <th>Activités</th>   
            <th>Résultats</th>
            <th>Contraintes</th>
            <th>Observations</th>
        </tr>
      </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rapports']->value, 'rapport');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rapport']->value) {
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rapport']->value['s_sigle'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rapport']->value['r_mois'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rapport']->value['r_annee'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rapport']->value['a_titre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rapport']->value['a_resultat'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rapport']->value['a_contrainte'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rapport']->value['a_observation'];?>
</td>
           <!--  <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/delete/<?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/delete16.png" class="resize"/>Supprimer</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/edit/<?php echo $_smarty_tpl->tpl_vars['village']->value['idVillage'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/edit16.png" class="resize" />Editer</a></td>-->
          </tr> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
    </table>
  
       <?php } else { ?>
         Liste vide
       <?php }?>
   <?php }?>
  </div>
</body>
</html><?php }
}
