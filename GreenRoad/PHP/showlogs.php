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

//Affiche en brut les trames reçues depuis le serveur
echo "Raw Data:<br />";
echo("$data");

//Affiche les trames reçues depuis le serveur en sautant une ligne pour chaque trame (1 trame = 33 caractères)$data_tab = str_split($data,33);
$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size; $i++){
echo "Trame $i: $data_tab[$i]<br />";
}

//Affiche le décodage d'une trame
$trame = $data_tab[1];
// décodage avec des substring
$t = substr($trame,0,1);
$o = substr($trame,1,4);

// décodage avec sscanf
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");

//Affiche chaque trames dans un tableau

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

</body>

<!--Footer-->
<?php include_once('footer.php'); ?>

</html>
