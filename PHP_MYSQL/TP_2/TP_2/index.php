<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP 2</title>
</head>
<body>
  
  <nav>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">A propos de</a></li>
      <li><a href="#">Galerie</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <h1>TP - FONCTIONS & FORMULAIRE</h1>
  
  <?php 
  // Introduction : Vous pouvez vous aider de vos documents vue en cours et d'internet
  // Une fois terminé, envoyer le dossier renommer TP_nom_prenom à l'adresse : m.mavrodis@gmail.com


  //Exercice 1 - point 1
  //Créer une fonction qui permet d'additionner deux arguments et retourne le résultat
  echo '<br>';
  
  //Exercice 2 - point 1
  //Créer une fonction qui permet d'afficher la date d'aujourd'hui
  echo '<br>';

  //Exercice 3 - point 3 
  //Créer une fonction qui permet d'afficher une plage de multiplication avec 2 arguments (ex : arg1=4, arg2=7 permet d'afficher les tables de 4 à 7)
  //Attention : faite les contrôles si jamais l'argument 2 est plus petit que l'argument 1
  echo '<br>';

  //Exercice 4 - point 3
  //Créer un formulaire comportant 3 champs input de type "text" et un champ type "submit"
  //Le formulaire doit permettre additionner, soustraire ou multiplier les données envoyer dans le formulaire
  //Deux champs de valeurs et un champ qui permet de choisir entre '-', '+', '*'  
  //Afficher le résultat sur la même page
  //Attention : faite bien les contrôles de vérification des champs s'ils sont bien saisies
  echo '<br>';

  //Exercice 5 - point 2
  //Créer deux pages dans un dossier "layout"
  //La première page "header.php"
  //La deuxième page "footer.php"
  //Faite en sorte de mettre le menu dans la page "header" et utiliser le require ou include dans les pages
  //Faite en sorte de mettre le pied de page dans la page "footer" et utiliser le require ou include dans les pages

  //Exercice 6 - point 3 
  //Récupérer les données envoyées en GET : ?nom=Dupont&prenom=Michel&age=20
  //Attention : faite bien les contrôles de vérification des champs s'ils sont bien saisies
  echo '<br>';

  //Exercice 7 - point 7
  //Créer un formulaire qui prend exemple au lien suivant : https://arcanum.paris/user/new
  //Afficher les données saisies sur la page
  //Ne pas prendre en compte le champ des numéros indicatif téléphonique, civilité et du design

  //Attention : faite bien les contrôles de vérification des champs s'ils sont bien saisies

  // Mot de passe
  //   Faire au moins 8 caractères
  //   Avoir au moins 1 chiffre
  //   Avoir au moins une majuscule et une minuscule
  //Email
  //  Vérifier qu'il y a un '@' et '.fr, .com'
  //Telephone
  //  Vérifier qu'il n'y a que des chiffres
  //  Vérifier que la taille minimum maximum est 10 chiffres
  echo '<br>';

  ?>

  <footer>
    <p>Pied de page</p>
  </footer>
</body>
</html>