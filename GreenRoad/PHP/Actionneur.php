<?php

    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GreenRoad</title>
    <link rel="stylesheet" href="../CSS/contact.css?v=<?php echo time(); ?>"> 
</head>


<body>
    <section class="login">
        <?php
        
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                echo "<a class=\"btn1\" href=\"../PHP/register.php\">Inscription</a>";
                echo "<a class=\"btn2\" href=\"../PHP/login.php\">Connexion</a>";
            }else{
                echo "<a href=\"../PHP/userpage.php\"><img src=\"../images/profillogo.png\"></a>";
                echo "<a class=\"btn3\" href=\"../PHP/logout.php\" >Déconnexion</a>";

            }
        ?>

    </section>

    <nav>
        <a href="../php/MainPage.php">
            <img src="../IMAGES/GreenRoad.gif">
        </a>
        <h1>GreenRoad</h1>
        <div class="onglets">
            <ul>
                </li><a href="../php/MainPage.php">Accueil</a></li>
                </li><a href="../php/caaapa.php">L'équipe</a></li>
                </li><u><a href="../php/contact.php">Contact</a></u></li>
                </li><a href="../php/faq.php">FAQ</a></li>
                </li><a href="../php/cartographie.php">Cartographie</a></li>
                </li><a href="../php/statsetdonnees.php">Statistiques</a></li>
                </li><a href="../php/pierrito.php" class="pierrito">Pierrito Game<span><img src="../IMAGES/pierrito.png"/></span></a></li>
            </ul>
        </div>

    </nav>
            <form action="" method="post">
                <input type="submit" class="boutonLED" name="submit" value="Allumer la led Bleue" style="background-color:blue;color:white">
                <input type="submit" class="boutonLED" name="submit2" value="Allumer la led Rouge" style="background-color:red;color:white">
                <input type="submit" class="boutonLED" name="submit3" value="Allumer la led Verte" style="background-color:green;color:white">
                <input type="submit" class="boutonLED" name="submit4" value="Allumer la led Magenta" style="background-color:magenta;color:white">
                <input type="submit" class="boutonLED" name="submit5" value="Allumer la led Cyan " style="background-color:cyan;color:white">
                <input type="submit" class="boutonLED" name="submit6" value="Allumer la led Jaune" style="background-color:yellow">
                <input type="submit" class="boutonLED" name="submit7" value="Allumer la led Blanc" style="background-color:white">
                <input type="submit" class="boutonLED" name="submit8" value="Eteindre la led">
            </form>
            
<?php

if(isset($_POST['submit'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-AAAAAAAAAA";

    header("Location: $monUrl");
    exit;
}

if(isset($_POST['submit2'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-ABBBBBBBBB"; 

    header("Location: $monUrl");
    exit;
}
if(isset($_POST['submit3'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-ACCCCCCCCC";  

    header("Location: $monUrl");
    exit;
}
if(isset($_POST['submit4'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-ADDDDDDDDD"; 

    header("Location: $monUrl");
    exit;
}
if(isset($_POST['submit5'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-AEEEEEEEEE";  

    header("Location: $monUrl");
    exit;
}
if(isset($_POST['submit6'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-AFFFFFFFFF";  

    header("Location: $monUrl");
    exit;
}
if(isset($_POST['submit7'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-AGGGGGGGGG";  

    header("Location: $monUrl");
    exit;
}
if(isset($_POST['submit8'])) {

        $monUrl="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G3-A&TRAME=1G3-AHHHHHHHHH";  

    header("Location: $monUrl");
    exit;
}
?>
</body>

<!--Footer-->
<?php include_once('footer.php'); ?>

</html>
