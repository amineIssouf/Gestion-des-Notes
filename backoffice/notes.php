<?php
$matiere=["CEJM","CYBERSECURITE","FRANCAIS","ANGLAIS"];
$eleves1 = ["Djanfar SAINDOU","Nassur FAYADHUI","Oumaïr ABDALLAH","Said AHMED","Azaly MAHAVITENY"];



if (isset($_POST['submit']))
{
    $nom= isset($_POST['nom']);
    $prenom= isset($_POST['prenom']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eleve</title>
    
</head>
<body>
    <h1>Back-office -- Notes</h1>
    <li><a href="classes.php">classes</a></li>
    <li><a href="eleves.php">eleves</a></li>
    <li><a href="matieres.php">matieres</a></li>
    <li><a href="notes.php">notes</a></li><br>

    <h1>Ajouter une notes</h1>
    <form action="" method="post">
        <label for="eleve">Eleve</label>
        <select name="classe" id="classe_selectionner">
            <?php
            foreach($eleves1 as $id => $eleves)
            {
                echo "<option value=\"$id\">$eleves</option>";
            }
            ?>
        </select>

        <label for="Matiere">Matiere</label>
        <select name="classe" id="classe_selectionner">
            <?php
            foreach($matiere as $id => $matier)
            {
                echo "<option value=\"$id\">$matier</option>";
            }
            ?>
        </select>

        <label for="NOTE">Note</label>
        <input type="number" name="note">

        <label for="DATE">Date</label>
        <input type="date" name="date">


        <input type="submit" value="Ajouter">

    </form>
    <br>


    <h1>Liste des Notes</h1>
    <Table>
        <thead>
            <tr>
                <td><H2>ID</H2></td>
                <td><h2>Eleve</h2></td>
                <td><H2>Matiere</H2></td>
                <td><h2>Note</h2></td>
                <td><H2>Date</H2></td>
                <td><H2>action</H2></td>
            </tr>
        </thead>
        <tbody>
            <?php
            ?>
        </tbody>
    </Table>
</body>
</html>