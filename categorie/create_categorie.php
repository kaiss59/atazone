<?php
session_start();

$nom_categorie = $_POST['nom_categorie'] ?? null;

if(
    !is_null($nom_categorie) && strlen($nom_categorie) <= 50
) {
    require_once __DIR__ . '/dbCon_categorie.php';

    $sql = 'insert into categorie values(null, :nom_categorie);';
    $stmt = $pdo->prepare($sql);

    $res = $stmt->execute([
        'nom_categorie' => dataCleaning($nom_categorie)
    ]);

    if ($res) {
        $_SESSION['ajout'] = 'Catégorie ajoutée';
    } else {
        $_SESSION['ajout'] = 'Erreur lors de l\'ajout';
    }
} else {
    $_SESSION['ajout'] = 'Veuillez vérifier les informations saisies';
}
header('location:form_create_categorie.php');