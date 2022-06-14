<?php
$db = mysqli_connect("localhost", "root", "", "greenroad");
if(!$db) {
    echo "Connexion non établie.";
    exit;
}

//-------FICHIER JSON DES CAPTEURS------------------------
/*
$queryCap = "SELECT * FROM capteurs";
$resultCap = $db->query($queryCap);

$bigArray = [];
$i = 0;
while($row = $resultCap->fetch_assoc()){
    $bigArray ["capteur".$i] = $row;
    $i++;
}

$bigArrayCap = ["capteurs"=>$bigArray];
$jsonCap = json_encode($bigArrayCap);
$createFileCap = file_put_contents("capteurs.json", $jsonCap);*/

//-------FICHIER JSON DES DONNEES------------------------


$queryDon = "SELECT donnee, `date`, type, latitude, longitude, nomVille FROM donnees INNER JOIN capteurs ON donnees.idCapteur = capteurs.idCapteur INNER JOIN villes ON capteurs.idVille = villes.idVille";
$resultDon = $db->query($queryDon);

$bigArrayDon = [];
$i = 0;
while($row = $resultDon->fetch_assoc()){
    $bigArrayDon ["donnee".$i] = $row;
    $i++;
}

$jsonDon = json_encode($bigArrayDon);
echo $jsonDon;
?>