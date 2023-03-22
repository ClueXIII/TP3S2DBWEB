<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
    <meta name = "viewport" content = "width =  device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
</head>
<body>
<header ><h1 class="w3-center" style="margin: 0">Bienvenue sur la page de renseignement</h1></header>
<div class="w3-card-2 w3-padding-large w3-margin w3-text-theme">
    <form action="" method="get">
        <label>Prenom </label><br/><input class ="w3-row-padding w3-input" type="text" name="prenom" /><br/>
        <label>Nom </label><br/><input class ="w3-row-padding w3-input" type="text" name="nom"/><br/>
        <label>Âge </label><br/><input class ="w3-row-padding w3-input" type="text" name="age"/><br/>
        <label>Adresse e-mail </label><br/><input class ="w3-row-padding w3-input"  type="text" name="adresse_e_mail" placeholder="nom.prenom@univ-avignon.fr"/><br/>
        <label>Mot de passe</label><br/><input class ="w3-row-padding w3-input"  type="password" name="mdp"/> <br/>
        <label>Retapez votre mot de passe</label><br/><input class ="w3-row-padding w3-input" type="password" name="re_mdp"/><br/>
        <label>Genre</label><br/>
        <div class="w3-text-black w3-radio w3-padding-small"><input class ="w3-row-padding w3-radio"  type="radio" name="genre" value="homme">Homme</div>
        <div class="w3-text-black w3-radio w3-padding-small"><input class ="w3-row-padding w3-radio"  type="radio" name="genre" value="femme">Femme</div>
        <div class="w3-text-black w3-radio w3-padding-small"><input class ="w3-row-padding w3-radio"  type="radio" name="genre" value="Non_Binaire">Non Binaire</div><br/>
        <label>Sports pratiqués régulièrement</label><br/>
        <div class="w3-half w3-text-black w3-padding-small"><input class="w3-check" type="checkbox" name="sport" value="Football">Football</div>
        <div class="w3-half w3-text-black w3-padding-small"><input class="w3-check" type="checkbox" name="sport" value="Equitation">Equitation </div><br/>
        <div class="w3-half w3-text-black w3-padding-small"><input class="w3-check" type="checkbox" name="sport" value="Basket">Basket</div>
        <div class="w3-half w3-text-black w3-padding-small"><input class="w3-check" type="checkbox" name="sport" value="Natation">Natation</div> <br/>
        <div class="w3-half w3-text-black w3-padding-small"><input class="w3-check" type="checkbox" name="sport" value="Vélo">Vélo</div>
        <div class="w3-half w3-text-black w3-padding-small"><input class="w3-check" type="checkbox" name="sport" value="Autre">Autre</div><br/><br/>
        <label>Activité principale </label><br/>
        <SELECT name="activité_prin" class="w3-input">
            <OPTION value="étudiant">étudiant</OPTION>
            <OPTION value="indépendant">indépendant</OPTION>
            <OPTION value="salarié">salarié</OPTION>
            <OPTION value="patron">patron</OPTION>
        </SELECT> <br/><br/>
        <label>Transport pour se rendre au stage </label><br/>
        <SELECT name="transport" size="5"  class="w3-input" style="overflow-y: auto;">
            <OPTION value="voiture">Voiture</OPTION>
            <OPTION value="trotinette">Trotinette</OPTION>
            <OPTION value="vélo">Vélo</OPTION>
            <OPTION value="bus">Bus</OPTION>
            <OPTION value="autre">Autre</OPTION>
        </SELECT> <br/><br/>
        <label>Autres informations </label><br/><textarea class="w3-input" name="informations" rows="3"></textarea><br/><br/>
        <input class="w3-btn w3-theme" type="submit" value="Envoyer le formulaire">
        <input class="w3-btn w3-theme" type="reset" value="Recommencer">
    </form>
</div>
</body>
</html>


