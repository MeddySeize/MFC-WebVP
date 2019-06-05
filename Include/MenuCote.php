<?php
include 'connexion_db.php';

$cmd = "SELECT * FROM categorie;";
$res = $db->query($cmd);
$tableCat = $res->fetchAll();
/* A mettre sur la page Shopping
$tableFrm = null;
if(isset($_GET['frm'])){
 $id = $_GET['frm'];
 $cmd = "SELECT * FROM formation WHERE id_formation = '$id' ;";
 $res = $db->query($cmd);
 $tableFrm = $res->fetchAll();
}
*/
?>
<div class="panel panel-default sidebar-menu"><!-- debut panel panel-default sidebar-menu-->
    <div class="panel-heading"><!-- debut panel-heading-->
        <h3 class="panel-title">Catégories</h3>
    </div><!-- fin panel-heading-->

    <div class="panel-body"><!-- debut panel-body-->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- debut nav nav-pills nav-stacked category-menu-->
            <?php
            foreach($tableCat as $line){
                echo '<li role="presentation"><a href="shopping.php?frm='.$line['id_categorie'].'">'.$line['nomCat'].'</a></li>';
            }
            ?>
        </ul><!-- fin nav nav-pills nav-stacked category-menu-->
    </div><!-- fin panel-body-->
</div><!-- fin panel panel-default sidebar-menu-->
