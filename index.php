<?php
//Déclaration des variables tableau
$yoann = [12, 15, 8, 6, 20, 19];
$bulletinScolaire = [
    "math" => 15,
    "français" => 12,
    "histoire-géo" => 8,
    "physique-chimie" => 18
];
$noteEleve = [
    "yoann" => [12, 15, 8, 6, 20, 19],
    "jeff" => [9, 5, 17, 16, 12, 13],
    "mathieu" => [20, 18, 8, 4, 15, 16]
];

//TRAITEMENTE DES DONNEES : NOTE DE YOANN
$i = 1;
$listeNote = "";
foreach($yoann as $note){
    $note = $note - 2;
    $listeNote .= "<li>Note $i : $note</li>";
    $i++;
}

//TRAITEMENTE DES DONNEES : NOTE DE YOANN + MOYENNE
function moyenne($tabNotes){
    //Exemple pour Foreach
    $somme = 0;
    foreach($tabNotes as $note){
        $somme += $note;
    }
    $moyenne = $somme / sizeof($tabNotes);
    return $moyenne;

    //Exemple avec Reduce
    // $result = array_reduce($tabNotes, function($accumulator,$note){
    //     $accumulator += $note;
    //     return $accumulator;
    // }, 0);
    // $moyenne = $result / sizeof($tabNotes);
    // return $moyenne;
}

$bulletinYoann = '';
foreach($bulletinScolaire as $matiere => $note){
    $bulletinYoann .= "<li> $matiere : $note </li>";
}
$bulletinYoann .= "<li> Moyenne Générale : ".moyenne($bulletinScolaire)."</li>";

//TRAITEMENTE DES DONNEES : MOYENNE ELEVE + MOYENNE GENERAL
// Déclaration d'un tableau vide : de concerver un tableau associatif associant chaque élève à sa moyenne
$moyenneEleve = [];

// Boucle pour calculer la moyenne de chaque élève, et l'insérer dans le tableau associatif $moyenneEleve, sous la forme "yoann" => 13.33
foreach($noteEleve as $eleve => $tabNote){
    $moyenneEleve[$eleve] = round(moyenne($tabNote),2);
}

// Calcul de la moyenne générale
$moyenneGenerale = round(moyenne($moyenneEleve),2);

//Créer l'affichage des <li>
$listeMoyenne = '';
foreach($moyenneEleve as $eleve => $moyenne){
    $listeMoyenne .= "<li> $eleve : $moyenne </li>";
}


include_once 'header.php';
?>
    
    <main>
        <h1> Note de Yoann </h1>
        <ul>
            <?php
                echo $listeNote;
            ?>
        </ul>

        <h1>Bulletin Scolaire de Yoann</h1>
        <ul>
            <?php
                echo $bulletinYoann;
            ?>
        </ul>

        <h1>Moyenne de la Classe</h1>
        <ul>
            <?php echo $listeMoyenne ?>
        </ul>
        <h2> Moyenne Générale : <?php echo $moyenneGenerale ?> </h2>
    </main>

<?php
include_once 'footer.php';