<?php
session_start();
$id_categorie = (int)$_POST ['id_categorie'];
// $id_categorie = $_POST['id_categorie'];
$nom_categorie = $_POST['nom_categorie'] ?? null;
// var_dump($_SESSION);

if (
    !is_null($nom_categorie) && strlen($nom_categorie) <= 50
) {
    require_once __DIR__ . '/dbCon_categorie.php';

    $sql = 'update categorie set nom_categorie = :nom_categorie where id_categorie= :id_categorie;';
    $stmt = $pdo->prepare($sql);

    $res = $stmt->execute([
        'id_categorie' => $id_categorie,
        'nom_categorie' => dataCleaning($nom_categorie),
    ]);

    if ($res) {
        $_SESSION['modif'] = 'Catégorie modifiée';
       
    } else {
        $_SESSION['modif'] = 'Erreur lors de la modification';
    }
} else {
    $_SESSION['modif'] = 'Veuillez vérifier les informations saisies sur le formulaire';
}
// var_dump($_SESSION);
header('location:getAllCategories.php');