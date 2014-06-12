<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/main.css"/>
    <title>Space Odyssey - Nous contacter</title>
  </head>
<?php include ("header.php"); ?>
    <div class="Grid">
      <div class="Grid-col Grid-col--8 Introduction">
        <h2 class="Introduction-title"><span>Nous contacter</span></h2>
        <ol class="Introduction-list">
          <li class="Introduction-item">
            <p class="Introduction-text">Vous avez besoin de nous contacter ? Vous rencontrez des difficultés pour accéder à nos rubriques ? N’hésitez pas à nous poser des questions à propos de Space Odyssey. Nous avons une page FAQ à votre disposition pour toutes les questions principales. Vous n’avez toujours pas trouvé votre réponse ? Vous pouvez contacter nos équipes par téléphone au +33 1 44 05 16 32, 7j/7, 24h/24.</p>
          </li>
        </ol>
      </div><!--
   --><div class="Grid-col Grid-col--4">
        <h2 class="Introduction-title">Mailbox</h2>
        <form action="#" method="get" id="formu" class="Contact-form">
          <input type="text" id="prenom"><br>
          <input type="text" id="nom"><br>
          <input type="text" id="mail"><br>
          <textarea rows="5" cols="50" id="commentaire"></textarea><br>
          <input type="submit" name="Envoyer" value="Envoyer" id="button" class="Button">
        </form>
      </div>
    </div>
<?php include ("footer.php"); ?>