<?php
require_once __DIR__ . '/dbCon_categorie.php';

$stmt = $pdo->query('select * from categorie');
$tabCategories = $stmt->fetchAll();

foreach ($tabCategories as $index => $categorie) {
    echo '
    <div class="ligne">
        <div class="col-nom_categorie">' .$categorie['nom_categorie'] . '</div>';
    
        echo '
        <form action="form_update_categorie.php" method="post">
            <input type="hidden" name="id_categorie" value="' . $categorie['id_categorie'] . '">
            <button type="submit">Modifier</button>
        </form>
        <form action="delete.php" method="post">
        <input type="hidden" name="id_categorie" value="' . $categorie['id_categorie'] . '">
            <button type="submit">Supprimer</button>
        </form>
        ';
}

echo '
    </div>
</div>
';