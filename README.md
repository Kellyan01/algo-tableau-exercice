# Exercice 02 :

1. Créer un nouveau projet algo-tableau-exercice, et l'initialiser en depôt git

2. créer le fichier index.php, header.php et footer.php

3. Dans le fichier header.php, insérer le HTML de <!DOCTYPE html> jusqu'à la balise fermante </header>

4. Dans le fichier footer.php, insérer le HTML de <footer> jusqu'à la balise fermante </html>

5. Dans le fichier index.php, insérer la balise <main> </main>, et effectuer les includes du header.php et footer.php

6. Au début du fichier index.php, ouvrir les balises <?php ?>

7. Assigner à une variable $yoann, le tableau suivant [12, 15, 8, 6, 20, 19]

8. Assigner à une variable $bulletinScolaire, le tableau suivant ["math" => 15, "français" => 12, "histoire-géo" => 8, "physique-chimie" => 18]

9. Assigner à une variable $noteEleve, le tableau suivant ["yoann" => [12, 15, 8, 6, 20, 19], "jeff" => [9, 5, 17, 16, 12, 13], "mathieu" => [20, 18, 8, 4, 15, 16]

10.  Dans le tableau $yoann, soustraire 2 à chaque note à l'aide de la boucle foreach, puis afficher chaque note dans le <main> sous la forme :
```html
<h1> Note de Yoann </h1>
<ul> <li> Note 1 : la_note</li>  ... </ul>
```

11. Dans le <main>, à partir du tableau $bulletinScolaire, afficher le nom de la matière, les notes et la moyenne de l'élève :
```html
<h1>Bulletin Scolaire de Yoann</h1>
<ul> <li> Math : 15</li> ... <li> Moyenne Général : la_moyenne</li></ul>
```

12. Dans le <main>, à partir du tableau $noteEleve, afficher le nom de l'élève, sa moyenne et la moyenne générale de la classe, sous la forme :
```html
<h1>Moyenne de la Classe</h1>
<ul> <li> yoann : sa_moyenne </li> ... </ul>
<h2> Moyenne Générale : la_moyenne_de_la_classe </h2>
```

13. Pour chaque Elève du tableau $noteEleve, afficher dans le <main> sa note la plus élevé, et sa note la plus basse. (Ne pas hésiter à créer des fonctions pour cela)

14. Pusher sur Github et m'envoyer le lien du repo 
