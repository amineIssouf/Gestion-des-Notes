<?php
$classe=["SIO1","SIO2"];

$nom= isset($_POST['nom']);
$prenom= isset($_POST['prenom']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eleve</title>
    
</head>
<body>
    <h1>Back-office -- Eleves</h1>
    <li><a href="classes.php">classes</a></li>
    <li><a href="eleves.php">eleves</a></li>
    <li><a href="matieres.php">matieres</a></li>
    <li><a href="notes.php">notes</a></li><br>

    <h1>Ajouter un eleve</h1>
    <form action="" method="post">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom">
        <label for="Nom">Nom</label>
        <input type="text" name="nom">
        <label for="classe">Classe</label>
        <select name="classe" id="classe_selectionner">
            <?php
            foreach($classe as $id => $classe_cplt)
            {
                echo "<option value=\"$id\">$classe_cplt</option>";
            }
            ?>
        </select>
        <input type="submit" value="envoyer">

    </form>
    <br>


    <h1>Liste des eleves</h1>
    <Table>
        <thead>
            <tr>
                <td><H2>ID</H2></td>
                <td><H2>Nom</H2></td>
                <td><H2>Prénom</H2></td>
                <td><H2>Classe</H2></td>
                <td><H2>Action</H2></td>
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($prenom) && !empty($nom))
            {
                echo "<td>";
                echo "<td>" . $prenom . "</td>";
            }
            ?>
        </tbody>
    </Table>



<!--<table>
        <thead>
            <tr>
                <th>Classe</th>
                <th>Matier</th>
                <th>Note</th>
                <th>Date</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $note_full=false;



            foreach($etudiants as $etudiant)
            {
                if((int)$etudiant['id'] === $selectionner_lid)
                {
                    $note_full = true;
                    echo "<tr>";
                    echo "<td>" . $etudiant['classe'] . "</td>";
                    echo "<td>" . $etudiant['matiere'] . "</td>";
                    echo "<td>" . $etudiant['note'] . "</td>";
                    echo "<td>" . $etudiant['date'] . "</td>";
                    echo "</tr";
                    

                }
            }
            
            
            
                
            

            if(!$note_full)
            {
                echo "Aucune note trouvée pour cet élève.";
            }
                
            ?>


        </tbody>
    </table>-->
    

</body>
</html>





    