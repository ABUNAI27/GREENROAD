<?php

  /*  session_start();
?>

<?php
if (!empty($_POST)) {
    $nom = ($_POST['nom']);
    $email = ($_POST['email']);
    $message = ($_POST['message']);

    // vérification du formulaire 
    if(!strpos($_POST['email'],'@')){//sans @, ce n'est pas un email
        echo "email incorrect";
    
    } elseif(empty($_POST['nom'])){ //nom vide => on arrête l'exécution du script
    echo "Le champ nom est vide.";
    } elseif(!preg_match("#^[A-Za-z0-9]+$#",$_POST['nom'])){//nom contenant des caractères interdits
    echo "Le nom doit être renseigné en lettres sans accents, sans caractères spéciaux.";
    } elseif(strlen($_POST['pseudo'])>32){//nom trop long
    echo "Le nom est trop long, il dépasse 32 caractères.";

    } elseif(empty($_POST['message'])){//mot de passe vide
    echo "Le champ message est vide.";
    } elseif(strlen($_POST['mdp'])>1000){//mdp trop long
    echo "Le message est trop long, il dépasse 1000 caractères.";
    } else {
        // entête email
        $headers  = 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
        $headers .= 'Reply-To: ' . $_POST['email'] . "\n";
        $headers .= 'From: "' . ucfirst(substr($_POST['email'], 0, strpos($_POST['email'], '@'))) . '"<'.$_POST['email'].'>' . "\n";
        
        mail("greenroad.caaapa@gmail.com", $_POST['nom'], $_POST['message'], $headers); 
        print "Email envoyé !";
    }
}*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> LCFM </title>
        <link rel="stylesheet" href="../CSS/MainPage.css?v=<?php echo time(); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
        <script language="JavaScript" type="text/JavaScript" src="lcfmjs.js"></script>
    </head>


    <body>
            
        <section class="login">

        </section>

        
        <nav>
            <a href="../php/lcfm.php">
                <img src="../IMAGES/lcfmlogo.png">
            </a>
            <h1>Laboratoire de Contrôle des Fluides et Matériaux</h1>
            <div class="onglets">
                <ul>
                    </li><u><a href="../php/lcfm.php">Le Laboratoire</a></u></li>
                    </li><a href="../php/">Analyse de l'eau</a></li>
                    </li><a href="../php/">Potabilité</a></li>
                    </li><a href="../php/">Analyse de l'air</a></li>
                    </li><a href="../php/">Métallographie</a></li>
                    </li><a href="../php/">Contact</a></li>
                </ul>
            </div>

        </nav>

        <div class="deroul-contact">
            <ul>
                <li><a href="#" onClick="debut(0)">Choix du domaine</a></li>
            </ul>


        </div>

</html>