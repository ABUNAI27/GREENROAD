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

        <header>
            <h2>BIENVENUE CHEZ GREENROAD</h2>
            <h3>L'innovation, notre seconde nature</h3>
        </header>
        <section class="àpropos">
            <div class="content">

                <div class="imagegauche">
                    <img src="../IMAGES/imagetoits.webp">
                </div>

                <div class="textedroite">
                    <h4>À PROPOS DE NOUS</h4>
                    <h5>
                        <p>Nos objectifs</p>
                        </p>Dans un monde de plus en plus urbanisé, garantir la place de l’humain c’est garantir la qualité de son environnement. En raison de l’évolution de notre société, il est de plus en plus difficile d'avoir un environnement sain, que ce soit à cause d’une mauvaise qualité de l’air, de la pollution sonore ou encore de la température autour de l’usager.</p>
                        </p>Afin de garantir une certaine place à l’humain dans un environnement confortable et sain, certaines entreprises font de l’écologie le cœur de leur mission, à l’instar de CAAAPA. Nous travaillons sur des projets censés rendre notre vie meilleure et respecter les enjeux écologiques de notre temps. C’est pour cette raison que notre start-up s’intéresse particulièrement aux appels d'offres de clients qui mettent en avant le désir d’améliorer notre environnement ou juste de sensibiliser.</p>
                    </h5>
                </div>

            </div>

        </section>


        
        <section class=map>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10502.703125190203!2d2.3280245!3d48.8453227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9bd1ac22c478d56e!2sISEP!5e0!3m2!1sfr!2sfr!4v1636974983219!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
        </section>
    </body>

    <!--Footer-->


</html>