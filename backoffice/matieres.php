<?php
$matiere=["CEJM","CYBERSECURITE","FRANCAIS","ANGLAIS"];

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
    <h1>Back-office -- Matieres</h1>
    <li><a href="classes.php">classes</a></li>
    <li><a href="eleves.php">eleves</a></li>
    <li><a href="matieres.php">matieres</a></li>
    <li><a href="notes.php">notes</a></li><br>

    <h1>Ajouter une matieres</h1>
    <form action="" method="post">
        <label for="Matiere">Matiere</label>
        <input type="text" name="matiere">
        <input type="submit" value="Ajouter">

    </form>
    <br>


    <h1>Liste des matieres</h1>
    <Table>
        <thead>
            <tr>
                <td><H2>ID</H2></td>
                <td><H2>Matiere</H2></td>
                <td><H2>action</H2></td>
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($prenom) && !empty($nom))
            {
                echo "<td>";
                echo "<td>" . $prenom . "</td>";
                echo "<td>";
            }
            ?>
        </tbody>
    </Table>
</body>
</html>





    