<?php
require_once 'header.php';
require_once 'inc\connect-db.php'
?>

<div class="ui container main">

    <?php
session_start();
    if(protection_user()){
        echo '<br><center>';
        echo '<font size="50" color="red">';
        echo 'Connectez vous en User !!';
        echo '</font></center>';
    }
    else{
    ?>
    <html>
    <link rel="stylesheet" href="colorus.css">
    <body>
    <img src="D:/laragon/www/PROG-Geoworld-main/geoworld/logo.jpg" alt="">
    <h1></br>Voici votre profil</h1><hr>
    <h3>Mes informations :</h3><br>
   Nom : <?php echo $_SESSION['nom']; ?><br> 
    Prénom : <?php echo $_SESSION['prenom']; ?><br>
    Login : <?php echo $_SESSION['login']; ?><br>
    Rôle : <?php echo $_SESSION['role']; ?><br>

    <h3>Modification des informations :</h3></br>

    <form method="post" action="#" class="ui form">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
        Nom : <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>">
        Prénom : <input type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>">
        Login : <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>">
        Mdp : <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>">
        <input type="submit" class="ui button" name="modif" value="Mise a jour"/>

        
    
    
    </form>
</div>
    </body>
    </html>
<?php

if (isset($_POST['modif'])) {
    $nom=$_POST['nom'];
    $id=$_POST['id'];
    $prenom=$_POST['prenom'];
    $login=$_POST['login'];
    $mdp=$_POST['password'];
    updateSalarieRR($nom,$prenom,$login,$mdp,$id);
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['login'] = $login;
    $_SESSION['pwd'] = $mdp;
    ?>
    <script> location.replace("gestion_user.php"); </script>
    <?php
}

?>

<?php
}
?>

<?php
require_once 'footer.php';
?>


