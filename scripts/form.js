document.getElementById('formu').onsubmit = function () {

/* Attribution de certaine valeur */

var mail = document.getElementById("mail").value;
var REXP = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9_-]{2,}[.][a-zA-Z]{2,3}$/; 
  /* Partie aucune erreur en blanc */
  
  document.getElementById('prenom').style.backgroundColor = "white";
  document.getElementById('nom').style.backgroundColor = "white";
  document.getElementById('mail').style.backgroundColor = "white";
  document.getElementById('commentaire').style.backgroundColor = "white";
  erreur = 0;
  
  /* Partie signalement d'erreur en rouge */
  
   if (document.getElementById('prenom').value == "") {
    document.getElementById('prenom').style.backgroundColor = "red";
    erreur++;
  } 

  if (document.getElementById('nom').value == "") {
    document.getElementById('nom').style.backgroundColor = "red";
    erreur++;
  }
  if (mail == "")
  {
    document.getElementById("mail").style.backgroundColor ="red";
  }
  
  /* Validation de @ et de . */
  
  if(REXP.exec(mail) == null)
  {
    document.getElementById("mail").style.backgroundColor ="red";
  }
  
  
  if (document.getElementById('commentaire').value == "") {
    document.getElementById('commentaire').style.backgroundColor = "red";
    erreur++;
  }

  if (!erreur)
    return true;
  else
    return false;
}