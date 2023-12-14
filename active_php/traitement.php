<?php
require('./clientTools.php');


$activiteArray = queryAllActivite();
$clientArray = queryAllClient();
$collaborateurArray = queryAllCollaborateur();
$contactArray = queryAllContact();
$contratArray = queryAllContrat();
$documentArray = queryAllDocument();
$etapeArray = queryAllEtape();
$fonctionArray = queryAllFonction();
$interventionArray = queryAllIntervention();
$projetArray = queryAllProjet();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>Clients</title>
    
</head>
<body>
<a href="index.php" class="back-button"><button>Retour</button></a>
    <table>
        <tbody>
        
            <?php

            if (isset($_GET['table_name'])) {

                $requestedTable = $_GET['table_name'];

                // Afficher des informations ou effectuer des actions en fonction de la table demandée
                switch ($requestedTable) {
                    case ACTIVITE_TABLE_NAME:

                        $firstRow = reset($activiteArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($activiteArray as $activiteDetails){
                            print("<tr>");
                            foreach($activiteDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case CLIENT_TABLE_NAME:

                        $firstRow = reset($clientArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($clientArray as $clientDetails){
                            print("<tr>");
                            foreach($clientDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case COLLABORATEUR_TABLE_NAME:

                        $firstRow = reset($collaborateurArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($collaborateurArray as $collaborateurDetails){
                            print("<tr>");
                            foreach($collaborateurDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case CONTACT_TABLE_NAME:

                        $firstRow = reset($contactArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($contactArray as $contactDetails){
                            print("<tr>");
                            foreach($contactDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case CONTRAT_TABLE_NAME:

                        $firstRow = reset($contratArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($contratArray as $contratDetails){
                            print("<tr>");
                            foreach($contratDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case DOCUMENT_TABLE_NAME:

                        $firstRow = reset($documentArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($documentArray as $documentDetails){
                            print("<tr>");
                            foreach($documentDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case ETAPE_TABLE_NAME:

                        $firstRow = reset($etapeArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($etapeArray as $etapeDetails){
                            print("<tr>");
                            foreach($etapeDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case FONCTION_TABLE_NAME:

                        $firstRow = reset($fonctionArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($fonctionArray as $fonctionDetails){
                            print("<tr>");
                            foreach($fonctionDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case INTERVENTION_TABLE_NAME:

                        $firstRow = reset($interventionArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($interventionArray as $interventionDetails){
                            print("<tr>");
                            foreach($interventionDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                    case PROJET_TABLE_NAME:

                        $firstRow = reset($projetArray);
                        foreach ($firstRow as $columnName => $value) {
                            $columnName = str_replace('_', ' ', $columnName);
                            echo '<th class="column_name">' . $columnName . '</th>';
                        }

                        foreach($projetArray as $projetDetails){
                            print("<tr>");
                            foreach($projetDetails as $key => $value){
                                print("<td>$value</td>");
                            }
                            print("</tr>");
                        }
                        break;

                }
            } else {
                echo 'Paramètre "table_name" manquant';
            }
            ?>
        </tbody>
        

    </table>
    

</body>

</html>