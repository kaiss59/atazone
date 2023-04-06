<?php
session_start();
if (isset($_SESSION['compte'])) {
    echo $_SESSION['compte'];
    unset($_SESSION['compte']);
}
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
    if (isset($_SESSION['modif'])) {
        echo $_SESSION['modif'];
        unset($_SESSION['modif']);
    }
    ?>
    <h1>Modifier une catégorie</h1>
    <form action="update_categorie.php" method="post">
        <!-- <div>
            <label for="nom_categorie">Ancienne catégorie : </label>
            <input type="text" name="nom_categorie" id="nom_categorie">
        </div> -->
        <div>
            <label for="nouvelle_categorie">Nouvelle catégorie : </label>
            <input type="text" name="nom_categorie" id="nom_categorie" placeholder="Entrez le nouveau nom">
        </div>
        <div><input type="hidden" name="id_categorie" id="id_categorie"></div>
        <div><input type="submit" value="Modifier" name="modifier"></div>
        
    </form>
    <!-- <?php
        $sth = $dbh->prepare("SELECT * FROM categorie");
        $sth->execute();
        
        /* Récupération de toutes les lignes d'un jeu de résultats */
        print("Récupération de toutes les lignes d'un jeu de résultats :\n");
        $result = $sth->fetchAll();
        print_r($result);
    ?> -->

</body>
</html>