<?php
session_start();

$id_categorie = (int)$_POST['id_categorie'];
// $id_categorie = $_POST['id_categorie'];

require_once __DIR__ . '/dbCon_categorie.php';

$sql = 'SELECT * from categorie where id_categorie = :id_categorie';

$stmt = $pdo->prepare($sql);

$res = $stmt->execute(['id_categorie' => $id_categorie]);

if ($res) {
    $categorie = $stmt->fetch();
} else {
    echo "une erreur est survenue lors de la récupération de l'annonce";
}