<?php
session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    if (isset($_SESSION['ajout'])) {
        echo $_SESSION['ajout'];
        unset($_SESSION['ajout']);
    }
    ?>
    <h1>Catégorie</h1>
    <form action="create_categorie.php" method="post">
        <div>
            <label for="nom_categorie">Nom de la catégorie :</label>
            <input type="text" name="nom_categorie" id="nom_categorie" placeholder="Entrez le nom" required>
        </div>
        <!-- <div><input type="hidden" name="id_categorie"></div> -->
        <div><input type="submit" value="Ajouter" name="enregistrer"></div>
    </form>
</body>

</html>