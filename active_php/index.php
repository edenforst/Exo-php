<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="app.css">
    <title>TP ACTIVE</title>
</head>
<body>
<div class="title">
    <div class="nom_tab">ACTIVE PHP</div>
    <form action="traitement.php" method="get">
        <label for="table_name">Choisir une table :</label>
        <select name="table_name" id="table_name">
            <option value="activite">Activité</option>
            <option value="client">Client</option>
            <option value="collaborateur">Collaborateur</option>
            <option value="contact">Contact</option>
            <option value="contrat">Contrat</option>
            <option value="document">Document</option>
            <option value="etape">Etape</option>
            <option value="fonction">Fonction</option>
            <option value="intervention">Intervention</option>
            <option value="projet">Projet</option>
        </select>
        <button type="submit">Valider</button>
    </form>
</div>
</body>
</html>