<?php

    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GreenRoad</title>
    <link rel="stylesheet" href="../CSS/tableaudebord.css?v=<?php echo time(); ?>"> 
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
     <?php
        $ch = curl_init();
        curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=G3-B");
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);
    ?>

    <div class="container">
        <div class="Tableau">
        <?php
            $data_tab =str_split($data,33);
            $data_tab_reverse = array_reverse ( $data_tab);
            echo ("
            <table>
                    <tr>
                        <th>Type de trame</th>
                        <th>Numéro d'équipe</th>
                        <th>Type de requête</th>
                        <th>Type de capteur</th>
                        <th>Numéro de capteur</th>
                        <th>Valeur du capteur</th>
                        <th>Numéro de trame</th>
                        <th>Checksum</th>
                        <th>Temps</th>
                    </tr>
                ");

            //var_dump(count($data_tab)
            for ($key = 0; $key < sizeof($data_tab); $key++){
                $trame = $data_tab[$key];
                $t = substr($trame,0,1);
                $o = substr($trame,1,4);

                // décodage avec sscanf
                list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
                    sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
                $espace = " ";
                $valeur = hexdec($v);
                echo("
                    <tr>
                        <td>$t</td>
                        <td>$o</td>
                        <td>$r</td>
                        <td>$c</td>
                        <td>$n</td>
                        <td>$valeur</td>
                        <td>$a</td>
                        <td>$x</td>
                        <td>$year,$month,$day,$espace,$hour,$min,$sec</td>
                    </tr>
                ");
                
            }
            echo (" </table>");

        ?>
        </div>
        <div class="Trames">
        <?php
            $data_tab = str_split($data,33);
            echo "Tabular Data:<br />";
            for($i=0, $size=count($data_tab); $i<$size; $i++){
            echo "Trame $i: $data_tab[$i]<br />";
            }
        ?>
        </div>
        <div class="Graphique"></div>
        <div class="Données-capteurs-en-direct"></div>
        <div class="Controle-LED">
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
        </div>
        <div class="Données-brutes">
       <?php 
            echo "Raw Data:<br />";
            echo("$data");
        ?>
        </div>
    </div>

</body>

<!--Footer-->
<?php include_once('footer.php'); ?>

</html>
