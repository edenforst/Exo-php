<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TP requete php bdd</title>
    
    <?php
try {
    $db = new PDO(
        "mysql:host=localhost:3306;dbname=ecf_home;charset=utf-8",
        "root",
        ""
    );
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}
    ?>
</head>
<body>
    
</body>
</html>