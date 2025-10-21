<?php
$eleves1 = ["Djanfar SAINDOU","Nassur FAYADHUI","Oumaïr ABDALLAH","Said AHMED","Azaly MAHAVITENY"];
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion de note</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 5px; text-align: left; }
    </style>
    
    <ul>
        <li><a href="aceul.html">retourner à l'aceul</a></li>
    </ul>
</head>
<body>

    <h1>Sélection de l'élève</h1>
    <form action=""></form>
    <p>Veuillez sélectionner l'élève que vous souhaitez voir ses notes :</p>
    <form action="aficherlnt.php" method="get">
        <select name="eleve" id="eleve_selected">
            <?php
            foreach($eleves1 as $id => $nom_cpl)
            {
                echo "<option value=\"$id\">$nom_cpl</option>";
            }
            ?>
        </select>
        <input type="submit" value="envoyer">
    </form>
    <br>
    


</body>
</html>