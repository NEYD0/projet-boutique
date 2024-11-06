<?php

// 1. Initialisation du stocks
$articles = ["Chaussettes", "T-shirts", "Chaussures", "Pantalons", "Pulls"];
$quantites = [10, 5, 8, 3, 12];

// Affichage des articles disponibles avec 'for'
echo "Liste des articles en stock :\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "$i. " . $articles[$i] . " - Stock : " . $quantites[$i] . "\n";
}
echo PHP_EOL;

// Affichage des articles disponibles avec 'foreach'
echo "\nArticles disponibles avec 'foreach':\n";
foreach ($articles as $index => $article) {
    echo $index . " - " . $article . "\n";
}

// 2. Gestion des stocks 
for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . ": " . $quantities[$i] . " en stock\n";
}

// 3. Vente d'un article
$index = readline("Entrez le numéro de l'article que vous souhaitez vendre : ");
$quantiteVente = readline("Entrez la quantité à vendre : ");

if ($index >= 0 && $index < count($articles)) {
    if ($quantiteVente <= $quantites[$index]) {
        $quantites[$index] -= $quantiteVente;
        echo "Vente réussie de $quantiteVente " . $articles[$index] . "(s). Stock restant : " . $quantites[$index] . "\n";
    } else {
        echo "Stock insuffisant pour effectuer cette vente.\n";
    }
} else {
    echo "Index invalide. Aucun article correspondant.\n";
}

// 4. Réapprovisionnement du Stock
$index = readline("Entrez le numéro de l'article à réapprovisionner : ");
$quantiteReappro = readline("Entrez la quantité à ajouter : ");

if ($index >= 0 && $index < count($articles)) {
    $quantites[$index] += $quantiteReappro;
    echo "Réapprovisionnement réussi. Nouvelle quantité de " . $articles[$index] . " : " . $quantites[$index] . "\n";
} else {
    echo "Index invalide. Aucun article correspondant.\n";
}

// Affichage du stock après réapprovisionnement
echo "\nÉtat du stock après réapprovisionnement :\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "$i. " . $articles[$i] . " - Stock : " . $quantites[$i] . "\n";
}
echo PHP_EOL;

// 5. Synthèse et Affichage du Stock
echo "\nSynthèse de l'état actuel du stock:\n";
for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . ": " . $quantities[$i] . " en stock\n";
    if ($quantities[$i] == 0) {
        echo $articles[$i] . " est en rupture de stock!\n";
    }
}

// 6. Suivi des Ventes Totales par Article
$totalVentes = [0, 0, 0, 0, 0];
$totalVentes[$indexVente] += $quantiteVente;

echo "\nSuivi des ventes totales par article:\n";
for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . ": " . $totalVentes[$i] . " vendus\n";
}

// 7. Suppression d'un article
$index = readline("Entrez le numéro de l'article à supprimer : ");

if ($index >= 0 && $index < count($articles)) {
    array_splice($articles, $index, 1);
    array_splice($quantites, $index, 1);
    echo "L'article a été supprimé du stock.\n";
} else {
    echo "Index invalide. Aucun article correspondant.\n";
}

// Affichage de la liste des articles restants ainsi que leurs quantités
echo "\nÉtat final du stock :\n";
foreach ($articles as $i => $article) {
    echo "$i. $article - Stock : " . $quantites[$i] . "\n";
}