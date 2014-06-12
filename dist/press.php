<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/main.css"/>
    <title>Space Odyssey - Dossier de presse</title>
  </head>
<?php include ("header.php"); ?>
<?php 
// On appelle le fichier de connexion Mysql
require_once 'mysql.inc.php'; 

// On recupere tous les articles
try
{
$sql = mysql_query("SELECT * FROM 1a_posts ORDER BY POS_DATE DESC");
// on ferme la connexion MySQL
mysql_close(); 

if (!$sql) throw new Exception( mysql_error() );
}
catch (Exception $e) { die( $e->getMessage() ); }
?>
<div class="Grid">
  <div class="Grid-col Grid-col--12 Introduction">
    <h2 class="Introduction-title">Titre de l'article</h2>
    <ol class="Introduction-list">
<?php
// On vérifie qu'il y a bien des articles
if( mysql_num_rows( $sql ) )
{
  $nb_count_art = 0;              //initialisation de la variable du nombre d'article
  while( $row = mysql_fetch_object( $sql ) )  //on boucle chaque ligne récupérée
  {
    echo '<li class="Introduction-item"><a href="backoffice/show.php?id='.$row->POS_ID.'">'.$row->POS_TITLE.'</a></td></li><br />'; //on affiche l'article 
  }
  
}
else
echo 'Aucun article';           //message au cas ou il y a pas d'article
?>
    </ol>
  </div>
</div>
  <th>Date</th>
  </tr>
<?php include ("footer.php"); ?>