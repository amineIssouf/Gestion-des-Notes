<?php
$classe=["SIO1","SIO2"];

$eleves1 = ["Djanfar SAINDOU","Nassur FAYADHUI","Oumaïr ABDALLAH","Said AHMED","Azaly MAHAVITENY"];
$etudiants = [
    // Djanfar 
    [
        'id' => '0',
        'nom' => 'SAINDOU',
        'prenom' => 'Djanfar',
        'classe' => 'SIO2',
        'matiere' => 'CEJM',
        'note' => '10',
        'date' => '10/02/2025',
    ],
    [
        'id' => '0',
        'nom' => 'SAINDOU',
        'prenom' => 'Djanfar',
        'classe' => 'SIO2',
        'matiere' => 'CYBERSECURITE',
        'note' => '5',
        'date' => '13/05/2025',
    ],
    [
        'id' => '0',
        'nom' => 'SAINDOU',
        'prenom' => 'Djanfar',
        'classe' => 'SIO2',
        'matiere' => 'FRANCAIS',
        'note' => '15',
        'date' => '09/06/2025',
    ],
    [
        'id' => '0',
        'nom' => 'SAINDOU',
        'prenom' => 'Djanfar',
        'classe' => 'SIO2',
        'matiere' => 'ANGLAIS',
        'note' => '15',
        'date' => '09/12/2025',
    ],

    // Nassur 
    [
        'id' => '1',
        'nom' => 'FAYADHUI',
        'prenom' => 'Nassur',
        'classe' => 'SIO2',
        'matiere' => 'CEJM',
        'note' => '12',
        'date' => '12/02/2025',
    ],
    [
        'id' => '1',
        'nom' => 'FAYADHUI',
        'prenom' => 'Nassur',
        'classe' => 'SIO2',
        'matiere' => 'CYBERSECURITE',
        'note' => '8',
        'date' => '14/05/2025',
    ],
    [
        'id' => '1',
        'nom' => 'FAYADHUI',
        'prenom' => 'Nassur',
        'classe' => 'SIO2',
        'matiere' => 'FRANCAIS',
        'note' => '13',
        'date' => '10/06/2025',
    ],
    [
        'id' => '1',
        'nom' => 'FAYADHUI',
        'prenom' => 'Nassur',
        'classe' => 'SIO2',
        'matiere' => 'ANGLAIS',
        'note' => '14',
        'date' => '11/12/2025',
    ],

    // Oumaïr 
    [
        'id' => '2',
        'nom' => 'ABDALLAH',
        'prenom' => 'Oumaïr',
        'classe' => 'SIO2',
        'matiere' => 'CEJM',
        'note' => '9',
        'date' => '15/02/2025',
    ],
    [
        'id' => '2',
        'nom' => 'ABDALLAH',
        'prenom' => 'Oumaïr',
        'classe' => 'SIO2',
        'matiere' => 'CYBERSECURITE',
        'note' => '11',
        'date' => '16/05/2025',
    ],
    [
        'id' => '2',
        'nom' => 'ABDALLAH',
        'prenom' => 'Oumaïr',
        'classe' => 'SIO2',
        'matiere' => 'FRANCAIS',
        'note' => '14',
        'date' => '12/06/2025',
    ],
    [
        'id' => '2',
        'nom' => 'ABDALLAH',
        'prenom' => 'Oumaïr',
        'classe' => 'SIO2',
        'matiere' => 'ANGLAIS',
        'note' => '10',
        'date' => '13/12/2025',
    ],

    // Said 
    [
        'id' => '3',
        'nom' => 'AHMED',
        'prenom' => 'Said',
        'classe' => 'SIO2',
        'matiere' => 'CEJM', 
        'note' => '15',
        'date' => '18/02/2025',
    ],
    [
        'id' => '3',
        'nom' => 'AHMED',
        'prenom' => 'Said',
        'classe' => 'SIO2',
        'matiere' => 'CYBERSECURITE',
        'note' => '12',
        'date' => '19/05/2025',
    ],
    [
        'id' => '3',
        'nom' => 'AHMED',
        'prenom' => 'Said',
        'classe' => 'SIO2',
        'matiere' => 'FRANCAIS',
        'note' => '16',
        'date' => '15/06/2025',
    ],
    [
        'id' => '3',
        'nom' => 'AHMED',
        'prenom' => 'Said',
        'classe' => 'SIO2',
        'matiere' => 'ANGLAIS',
        'note' => '13',
        'date' => '16/12/2025',
    ],

    // Azaly 
    [
        'id' => '4',
        'nom' => 'MAHAVITENY',
        'prenom' => 'Azaly',
        'classe' => 'SIO2',
        'matiere' => 'CEJM',
        'note' => '11',
        'date' => '20/02/2025',
    ],
    [
        'id' => '4',
        'nom' => 'MAHAVITENY',
        'prenom' => 'Azaly',
        'classe' => 'SIO2',
        'matiere' => 'CYBERSECURITE',
        'note' => '7',
        'date' => '21/05/2025',
    ],
    [
        'id' => '4',
        'nom' => 'MAHAVITENY',
        'prenom' => 'Azaly',
        'classe' => 'SIO2',
        'matiere' => 'FRANCAIS',
        'note' => '12',
        'date' => '17/06/2025',
    ],
    [
        'id' => '4',
        'nom' => 'MAHAVITENY',
        'prenom' => 'Azaly',
        'classe' => 'SIO2',
        'matiere' => 'ANGLAIS',
        'note' => '14',
        'date' => '18/12/2025',
    ],
];


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
        <input type="submit" value="Ajouter">

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
                echo "<td>";
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





    